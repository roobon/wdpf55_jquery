import React from 'react'
import ReactDOM from 'react-dom/client'
import './index.css';
import {
  createBrowserRouter,
  RouterProvider,
} from "react-router-dom";
import App from './App';
import Contact from './Components/Contact';
import About from './Components/About';
import Home from './Components/Home';
import Friends from './Components/Friends/Friends';
import Friend from './Components/Friends/Friend';
import FriendDetail from './Components/Friends/FriendDetail';
import Photos from './Components/Photos/Photos';
import Photo from './Components/Photos/Photo';
import PhotoDetails from './Components/Photos/PhotoDetails';

const router = createBrowserRouter([
  {
    path: "/",
    element: <App></App>,
    children: [
      {
        path: "contact",
        element: <Contact></Contact>,

      },
      {
        path: "friends",
        element: <Friends></Friends>,
        loader: () => fetch('https://jsonplaceholder.typicode.com/users')
      },
      {
        path: "friend",
        element: <Friend></Friend>,

      },
      {
        path: "friend/:friendId",
        element: <FriendDetail></FriendDetail>,
        loader: ({ params }) => fetch(`https://jsonplaceholder.typicode.com/users/${params.friendId}`)

      },
      {
        path: "home",
        element: <Home></Home>,

      },
      {
        path: "about",
        element: <About></About>,
      },
      {
        path: "photos",
        element: <Photos></Photos>,
        loader: () => fetch('https://jsonplaceholder.typicode.com/posts')
      },

      {
        path: "photo",
        element: <Photo></Photo>
      },
      {
        path: "photo/:photoId",
        element: <PhotoDetails></PhotoDetails>,
        loader: ({ params }) => fetch(`https://jsonplaceholder.typicode.com/posts/${params.photoId}`)
      },
    ]
  },



]);

ReactDOM.createRoot(document.getElementById('root')).render(
  <React.StrictMode>
    <RouterProvider router={router} />
  </React.StrictMode>,
)
