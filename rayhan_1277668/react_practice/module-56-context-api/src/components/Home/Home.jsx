import { useLoaderData } from "react-router-dom";
import Tshirts from "./Tshirts";
import Cart from "./Cart";
import './Home.css' ;
import { useState } from "react";
import toast from 'react-hot-toast';



const Home = () => {

    const tshirts = useLoaderData();
    const [ cart, setCart ] = useState([]);

    const handleAddToCart = tshirt => {

        const exists = cart.find( ts => ts._id === tshirt._id );
        if ( exists ) {
            toast(' You Have Already Selected This Item ');
                
        } else {
        
            const newCart = [...cart , tshirt] ;
            setCart(newCart) ;
        }
    }

    const handleRemoveFromCart = id => {
        const remaining = cart.filter( ts => ts._id !== id );
        setCart(remaining);
    }

    return (
        <div className="home_container">


      


        <div className="tshirt_container">
        {
                tshirts.map( tshirt => <Tshirts
                key={tshirt._id}
                tshirt={tshirt}
                handleAddToCart={handleAddToCart}
                ></Tshirts>  )
            }
        </div>
        <div className="cart_container">
            <Cart cart={cart}
                    handleRemoveFromCart={handleRemoveFromCart}
            >

            </Cart>
        </div>
        </div>
    );
};

export default Home;