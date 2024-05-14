import { createRoot } from 'react-dom/client';
import { createBrowserRouter, RouterProvider } from 'react-router-dom';
import RadialMenu from './ReactComponents/radialMenu';
import Geography from './ReactComponents/Geography/Geography';

const routes = [
    {
        path: '/games',
        element: <RadialMenu />
    },
    {
        path: '/geography',
        element: <Geography />
    }
]

createRoot(document.getElementById('root')).render(
    <RouterProvider
        router={createBrowserRouter(routes)} />
)