import React, { useEffect, useState } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

const Menu = () => {
  const [open, setOpen] = useState(false);
  const [menuItems, setMenuItems] = useState([]);

  // load menu items from API
  useEffect(() => {
    axios.get('/wp-json/v2/menu')
    .then((response) => {
      setMenuItems(response.data);
    });
  }, []);


  // open the menu
  const toggleMenu = () => {
    setOpen(!open);
  }

  const goToUrl = (url) => {
    window.location = url;
  }


  if(!open) {
    return (
      <img
        onClick={toggleMenu}
        className="menu-icon"
        src="/wp-content/themes/MurphyUp/assets/icons/Icon:Menu.svg" alt="menu"
      />
    )
  }

  return (
    <div className="menu">
      <img
        onClick={toggleMenu}
        className="menu__close"
        src="/wp-content/themes/MurphyUp/assets/icons/Icon:Close.svg" alt="menu"
      />
      <ul className="menu-list">
        {menuItems.map((value, index) => {
          return (
            <li className="menu-list__item" key={index}>
              <a
                className="menu-list__link"
                href={value.url}
                onClick={() => goToUrl(value.url)}
              >
                {value.title}
              </a>
            </li>
          );
        })}
      </ul>
    </div>
  );
};

if (document.getElementById('menu-container')) {
	ReactDOM.render(<Menu />, document.getElementById('menu-container'))
}

export default Menu;
