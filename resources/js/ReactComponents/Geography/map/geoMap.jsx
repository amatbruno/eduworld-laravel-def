import React, { useState } from 'react'
import { ComposableMap, Geographies, Geography, Marker } from "react-simple-maps"
import mapdata from '../../../../utils/mapdata';
import './geoMap.css';


export default function Map() {
    return (
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
                                    return (
                                        <Geography
                                            onClick={() => console.log(stateName)}
                                            key={geo.rsmKey}
                                            geography={geo}
                                            style={{
                                                hover: {
                                                    fill: '#e69c47',
                                                },
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
    )
}
