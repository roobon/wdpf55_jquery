import Cart from "./Cart";


const Tshirts = ({tshirt , handleAddToCart}) => {
    const { picture, name, price,  } = tshirt ;
    

    return (
           <div className="tshirt_card">
           <img className="tshirt_img" src={picture} alt="" />
            <h3> {name} </h3>
            <h6> {price} </h6>
            <button onClick={()=> handleAddToCart(tshirt)}> Buy Now </button>
        </div>
    );
};

export default Tshirts;