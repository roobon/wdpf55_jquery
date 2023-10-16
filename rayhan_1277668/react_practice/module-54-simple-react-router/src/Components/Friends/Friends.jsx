import { useLoaderData } from 'react-router-dom';
import Friend from './Friend';
import './Friends.css' ;

const Friends = () => {
    const data = useLoaderData();
    console.log(data);
    return (
        <div>
            <h1> My {data.length} Friends are here </h1>

        <div className='friend'>
        {
                data.map ( friend => <Friend 
                key={friend.id}
                friend={friend}
                >

                </Friend> )
            }
        </div>
        </div>
    );
};

export default Friends;