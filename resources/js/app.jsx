import { createRoot } from 'react-dom/client';
import { createBrowserRouter, RouterProvider } from 'react-router-dom';
import RadialMenu from './ReactComponents/radialMenu';
import GeographyComponent from './ReactComponents/Geography/Geography';
import HistoryComponent from './ReactComponents/History/History';

const routes = [
    {
        path: '/games',
        element: <RadialMenu />
    },
    {
        path: '/geography',
        element: <GeographyComponent />
    },
    {
        path: '/history',
        element: <HistoryComponent />
    }
]

createRoot(document.getElementById('root')).render(
    <RouterProvider
        router={createBrowserRouter(routes)} />
)