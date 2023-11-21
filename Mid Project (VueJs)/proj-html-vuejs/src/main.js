import { createApp } from "vue";
// bootstrap
import "bootstrap/dist/css/bootstrap.min.css";

//fontawesome
import { library } from "@fortawesome/fontawesome-svg-core";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import {
  faMagnifyingGlass,
  faUserPlus,
  faCalendarDays,
  faUserTie,
  faMoneyBillWave,
  faPlus,
  faEye,
  faPaperPlane,
  faAngleUp,
} from "@fortawesome/free-solid-svg-icons";
import {
  faFacebookF,
  faTwitter,
  faInstagram,
} from "@fortawesome/free-brands-svg-icons";
library.add(
  faMagnifyingGlass,
  faUserPlus,
  faCalendarDays,
  faUserTie,
  faMoneyBillWave,
  faPlus,
  faEye,
  faPaperPlane,
  faFacebookF,
  faTwitter,
  faInstagram,
  faAngleUp
);

import App from "./App.vue";

createApp(App).component("font-awesome-icon", FontAwesomeIcon).mount("#app");
