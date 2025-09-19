import './bootstrap';
import Search from "./live-search";
import Chat from "./chat";
import Profile from "./profile";
import TurndownService from 'turndown';





if (document.querySelector(".profile-nav")) {
    new Profile();
}

if (document.querySelector(".header-docusearch-icon")) {
    // new Search();
}

if (document.querySelector(".header-chat-icon")) {
    // new Chat();
}
