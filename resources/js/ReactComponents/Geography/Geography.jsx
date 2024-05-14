import React, { useEffect, useState } from 'react'
import Map from './map/geoMap'
import Question from './question/question';
import comunitiesData from '../../../utils/comunities.json';

export default function Geography() {
    const [randomData, setRandomData] = useState(null);

    const getRandomData = () => {
        const randomIndex = Math.floor(Math.random() * comunitiesData.comunities.length);
        const randomItem = comunitiesData.comunities[randomIndex];
        setRandomData(randomItem);
    }

    useEffect(() => {
        getRandomData();
    }, []);

    return (
        <section className='mt-10'>
            <Map />
            <Question name={randomData} />
        </section>
    )
}
