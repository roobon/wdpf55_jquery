import React from 'react';
import { Link } from 'react-router-dom';

const Header = () => {
    return (
        <div>
            <Link to='home'> Home  </Link>
            <Link to='about'> About  </Link>
            <Link to='contact'> Contact  </Link>
            <Link to='friends'> Friends  </Link>
            <Link to='photos'> Photos  </Link>
        </div>
    );
};

export default Header;