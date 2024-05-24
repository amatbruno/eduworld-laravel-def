import React, { useEffect, useState } from 'react';
import Question from './HistoryComponents/Question';
import trivia from '../../../utils/trivia';
import './History.css';

export default function History() {
    const [activeQuestion, setActiveQuestion] = useState(0);
    const [selectedAnswer, setSelectedAnswer] = useState('');
    const [showResult, setShowResult] = useState(false);
    const [selectedAnswerIndex, setSelectedAnswerIndex] = useState(null);
    const [result, setResult] = useState({
        score: 0,
        correctAnswers: 0,
        wrongAnswers: 0,
    });

    const { questions } = trivia
    const { question, choices, correctAnswer } = questions[activeQuestion]
    const userId = 1;
    const gameId = 1;

    const onClickNext = () => {
        setSelectedAnswerIndex(null)
        setResult((prev) =>
            selectedAnswer
                ? {
                    ...prev,
                    score: prev.score + 5,
                    correctAnswers: prev.correctAnswers + 1,
                }
                : { ...prev, wrongAnswers: prev.wrongAnswers + 1 }
        )
        if (activeQuestion !== questions.length - 1) {
            setActiveQuestion((prev) => prev + 1)
        } else {
            setActiveQuestion(0)
            setShowResult(true)
        }
    }

    const onAnswerSelected = (answer, index) => {
        setSelectedAnswerIndex(index)
        if (answer === correctAnswer) {
            setSelectedAnswer(true)
        } else {
            setSelectedAnswer(false)
        }
    }

    const addLeadingZero = (number) => (number > 9 ? number : `0${number}`)

    useEffect(() => {
        if (showResult) {
            const saveScore = async () => {
                try {
                    const response = await fetch('http://localhost:8000/api/save-score', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Authorization': `Bearer ${localStorage.getItem('token')}`,
                        },
                        body: JSON.stringify({
                            user_id: userId,
                            game_id: gameId,
                            score: result.score,
                        }),
                    });

                    if (response.ok) {
                        const data = await response.json();
                        console.log(data);
                    } else {
                        console.error('Failed to save score');
                    }
                } catch (error) {
                    console.error('Error:', error);
                }
            };

            saveScore();
        }
    }, [showResult, result.score, userId]);

    return (
        <main className='mt-16'>
            <section className='question-container'>
                {!showResult ? (
                    <div>
                        <div className='text-4xl font-bold'>
                            <span id='active-question-num'>{addLeadingZero(activeQuestion + 1)}</span>
                        </div>
                        <div className='mt-2'>
                            <h2 className='text-2xl font-medium'>{question}</h2>
                            <ul className='flex flex-col gap-1 mt-5'>
                                {choices.map((answer, index) => (
                                    <li
                                        onClick={() => onAnswerSelected(answer, index)}
                                        key={answer}
                                        className={selectedAnswerIndex === index ? 'selected-answer' : null}>
                                        {answer}
                                    </li>
                                ))}
                            </ul>
                        </div>
                        <div className='flex justify-end mt-5'>
                            <button className='py-2 px-10 cursor-pointer font-semibold text-lg rounded-lg' onClick={onClickNext} disabled={selectedAnswerIndex === null}>
                                {activeQuestion === questions.length - 1 ? 'Finish' : 'Next'}
                            </button>
                        </div>
                    </div>
                ) : (
                    <div className='result rounded-md text-xl'>
                        <h3 className='text-3xl text-center font-medium mb-3'>Quiz Result</h3>
                        <p>
                            Total questions: <span>{questions.length}</span>
                        </p>
                        <p>
                            Your score:<span>{result.score}</span>
                        </p>
                        <p>
                            Correct answers:<span>{result.correctAnswers}</span>
                        </p>
                        <p>
                            Wrong answers:<span>{result.wrongAnswers}</span>
                        </p>
                    </div>
                )}
            </section>
        </main>
    )
}
