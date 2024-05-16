import React, { useEffect, useState } from 'react'
import { Link } from 'react-router-dom';
import { ComposableMap, Geographies, Geography, Marker } from "react-simple-maps"
import './Geography.css';
import mapdata from '../../../utils/mapdata';
import Question from './question/question';
import comunitiesData from '../../../utils/comunities';

export default function GeographyComponent() {
    const [randomData, setRandomData] = useState(null);
    const [selectedCommunity, setSelectedCommunity] = useState(null);
    const [countCorrect, setCountCorrect] = useState(0);
    const [remainingCommunities, setRemainingCommunities] = useState([]);
    const [gameOver, setGameOver] = useState(false);
    const [finalScore, setFinalScore] = useState(0);

    useEffect(() => {
        getRandomData();
    }, [remainingCommunities]);

    const getRandomData = () => {
        if (remainingCommunities.length === 0) {
            setRemainingCommunities(comunitiesData.slice());
            setCountCorrect(0);
        }

        const randomIndex = Math.floor(Math.random() * remainingCommunities.length);
        const randomItem = remainingCommunities[randomIndex];
        setRandomData(randomItem);
    }

    const checkCommunity = (data) => {
        if (randomData !== data) {
            setSelectedCommunity(prevSelectedCommunities => ({
                ...prevSelectedCommunities,
                [data]: 'incorrect'
            }));
            setRemainingCommunities(prevCommunities => prevCommunities.filter(community => community !== data));
            setCountCorrect(countCorrect - 1);
        } else {
            setSelectedCommunity(prevSelectedCommunities => ({
                ...prevSelectedCommunities,
                [data]: 'correct'
            }));
            setRemainingCommunities(prevCommunities => prevCommunities.filter(community => community !== data));
            setCountCorrect(countCorrect + 1);
        }

        if (remainingCommunities.length === 1) {
            setGameOver(true);
            setFinalScore(countCorrect);
        }
    }

    const restartGame = () => {
        setRandomData(null);
        setSelectedCommunity(null);
        setCountCorrect(0);
        setRemainingCommunities([]);
        setGameOver(false);
        setFinalScore(0);
    }

    return (
        <main className='mt-10'>
            <article className='flex gap-2 text-white items-center justify-start text-xl mb-4'>
                <h1 className='font-bold'>Points: </h1>
                <p className='font-normal italic'>{countCorrect}</p>
            </article>

            <section style={{
                width: '900px',
                height: '450px',
                background: 'white',
                borderRadius: '20px'
            }}>

                <ComposableMap projection="geoMercator" projectionConfig={{
                    scale: 1700,
                    center: [-3, 37]
                }} fill='white'
                    stroke='black'
                    strokeWidth={1}>
                    <Geographies id='mapStyle' geography={mapdata.data}>
                        {(geographies) => {
                            return (
                                <>
                                    {geographies.geographies.map((geo) => {
                                        const stateName = geo.properties.name;
                                        const communityClassName = selectedCommunity && selectedCommunity[stateName] === 'correct' ? 'community correct' : selectedCommunity &&
                                            selectedCommunity[stateName] === 'incorrect' ? 'community incorrect' : 'community';
                                        const fill = selectedCommunity && selectedCommunity[stateName] === 'correct' ? '#7FFF00' : selectedCommunity &&
                                            selectedCommunity[stateName] === 'incorrect' ? 'red' : 'white';
                                        return (
                                            <Geography
                                                key={geo.rsmKey}
                                                geography={geo}
                                                className={communityClassName}
                                                onClick={() => checkCommunity(stateName)}
                                                style={{
                                                    hover: {
                                                        fill: '#c7c7c7',
                                                    },
                                                    fill: fill
                                                }}
                                            />
                                        );
                                    })}
                                </>
                            );
                        }}
                    </Geographies>
                </ComposableMap>
            </section>
            <section className='w-[900px] bg-white rounded-xl mt-7 py-6 flex text-2xl gap-4 items-center justify-center'>
                {/* {
                    gameOver === true ?
                        <div className='flex '>
                            <p className="text-xl">Fin del juego! Tu puntuacion final ha sido de <span className='font-bold'>{finalScore} pts.</span></p>
                            <div>
                                <button>Restart Game</button>
                                <button>Return To Menu</button>
                            </div>
                        </div> :
                        <Question name={randomData} />
                } */}
                <div className='flex flex-col justify-center items-center gap-7'>
                    <p className="text-xl">Fin del juego! Tu puntuacion final ha sido de <span className='font-bold'>{finalScore} pts.</span></p>
                    <div className='text-xl flex gap-7'>
                        <button className='border-orange-400' onClick={restartGame}>Restart Game</button>
                        <Link className='bg-blue-300' to='/games' >Return to Menu</Link>
                    </div>
                </div>
            </section>
        </main>
    )
}
