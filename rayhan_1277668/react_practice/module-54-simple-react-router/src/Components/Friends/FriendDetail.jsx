import { useLoaderData } from "react-router-dom";


const FriendDetail = () => {
    const friend = useLoaderData();
    console.log(friend);
    return (
        <div>
            <h1> My details of a friend </h1>
            <h3>Name : {friend.name}</h3>
            <h4> email: {friend.email} </h4>
            <h4> Address: {friend.address.city} </h4>
        </div>
    );
};

export default FriendDetail;