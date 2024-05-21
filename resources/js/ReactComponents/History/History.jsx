import React, { useState } from 'react'
import Question from './HistoryComponents/Question'
import trivia from '../../../utils/trivia';
import './History.css';

export default function History() {
    const [activeQuestion, setActiveQuestion] = useState(0);
    const [selectedAnswer, setSelectedAnswer] = useState('');
    const [result, setResult] = useState({
        score: 0,
        correctAnswers: 0,
        wrongAnswers: 0
    });

    const nextQuestion = () => {
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

    const { questions } = trivia;
    const { question, choices } = questions[activeQuestion];

    return (
        <main className='mt-10'>
            <div className='flex gap-2 text-white items-center justify-start text-xl mb-4'>
                <h1 className='font-bold'>Correct Answers: </h1>
                <p className='font-normal italic'>0</p>
            </div>
            <section className='question-container'>
                <h2>{question}</h2>
                <ul>
                    {
                        choices.map((choice, index) => (
                            <li key={index}>{choice}</li>
                        ))
                    }
                </ul>
                <button onClick={nextQuestion}>Next Question</button>
            </section>
        </main>
    )
}
