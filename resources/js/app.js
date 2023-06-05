import "./bootstrap";
import "/node_modules/flag-icons/css/flag-icons.min.css";

import Alpine from "alpinejs";
import mask from "@alpinejs/mask";
// import persist from "@alpinejs/persist";
import collapse from "@alpinejs/collapse";

window.Alpine = Alpine;

Alpine.plugin(mask);
// Alpine.plugin(persist);
Alpine.plugin(collapse);

Alpine.start();
