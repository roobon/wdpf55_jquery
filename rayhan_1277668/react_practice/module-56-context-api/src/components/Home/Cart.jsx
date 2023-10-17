

const Cart = ({ cart, handleRemoveFromCart }) => {
    return (
        <div>
            <h1 className={cart.length == 0 ? 'red': 'blue'}> Items Selected {cart.length} </h1>

            <p className={`bold bordered  ${cart.length == 3 ? 'red' : 'blue' } `}> select some Item </p>

            {cart.length == 0 ? <span> No Items Selected </span> : <span>Items Selected {cart.length}</span>  }
                    
    {
        cart.map(tshirt => <p
            key={tshirt._id} >
            {tshirt.name}
            <button onClick={ ()=> handleRemoveFromCart(tshirt._id)}
            > X </button>
        </p>)
    }
        </div>
    );
};

export default Cart;