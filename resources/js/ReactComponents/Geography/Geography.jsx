import React, { useEffect, useState } from 'react'
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
    }

    useEffect(() => {
        getRandomData();
    }, [remainingCommunities]);

    return (
        <section className='mt-10'>
            <div>
                <h1 className='mb-5 text-xl text-white font-bold italic flex gap-2'>Points: <p className='font-normal'>{countCorrect}</p></h1>
            </div>

            <div style={{
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
            </div>
            <Question name={randomData} />
        </section>
    )
}
