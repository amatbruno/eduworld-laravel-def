import React, { useState } from 'react'
import Question from './HistoryComponents/Question'
import trivia from '../../../utils/trivia';
import './History.css';

export default function History() {
    const [activeQuestion, setActiveQuestion] = useState(0);
    const [selectedAnswer, setSelectedAnswer] = useState('');
    const [selectedAnswerIndex, setSelectedAnswerIndex] = useState(null)
    const [result, setResult] = useState({
        score: 0,
        correctAnswers: 0,
        wrongAnswers: 0
    });
    const { questions } = trivia;
    const { question, choices } = questions[activeQuestion];

    const onClickNext = () => {
        setSelectedAnswerIndex(null)
        setActiveQuestion(previous => previous + 1)
        setResult((previous) =>
            selectedAnswer ? {
                ...previous,
                score: previous.score + 1,
                correctAnswers: previous.correctAnswers + 1,
            } : {
                ...previous, wrongAnswers: previous.wrongAnswers + 1
            }
        )
    }

    const onAnswerSelected = (answer, index) => {
        setSelectedAnswerIndex(index)
        if (answer === correct) {
            setSelectedAnswer(true);
            console.log(true);
        } else {
            setSelectedAnswer(false);
            console.log(true);
        }
    }

    const addLeadingZero = (number) => (number > 9 ? number : `0${number}`)

    return (
        <main className='mt-10'>
            <div className='flex gap-2 text-white items-center justify-start text-xl mb-4'>
                <h1 className='font-bold'>Correct Answers: </h1>
                <p className='font-normal italic'>0</p>
            </div>
            <section className='question-container'>
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

            </section>
        </main>
    )
}
