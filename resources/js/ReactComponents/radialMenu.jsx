import React from 'react';
import './radialMenu.css';

export default function radialMenu() {
    return (
        <div>
            <span id='span-1'>
                <span id='span-2'></span>
            </span>
            <div className="wrap">
                <a className='link' href="/history"><div></div></a>
                <a className='link' href="#"><div></div></a>
                <a className='link' href="/geography"><div></div></a>
                <a className='link' href="#"><div></div></a>
            </div>
        </div>
    )
}
