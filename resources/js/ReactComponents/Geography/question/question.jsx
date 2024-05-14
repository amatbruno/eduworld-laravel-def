import React from 'react'

export default function Question(props) {
    return (
        <div className='w-[900px] bg-white rounded-xl mt-7 p-5 flex text-2xl gap-4 
        items-center justify-center'>
            <h1>Select</h1>
            <h1 className='font-bold'>{props.name}</h1>
            <h1>in the interactive map!</h1>
        </div>
    )
}
