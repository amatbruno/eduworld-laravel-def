import { createRoot } from 'react-dom/client';
import { createBrowserRouter, RouterProvider } from 'react-router-dom';
import RadialMenu from './ReactComponents/radialMenu';

const routes = [
    {
        path: '/games',
        element: <RadialMenu />
    }
]

createRoot(document.getElementById('root')).render(
    <RouterProvider
        router={createBrowserRouter(routes)} />
)