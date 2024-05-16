import React from 'react'

export default function Question(props) {
    return (
        <>
            <h1>Select</h1>
            <h1 className='font-bold'>{props.name}</h1>
            <h1>in the interactive map!</h1>
        </>
    )
}
