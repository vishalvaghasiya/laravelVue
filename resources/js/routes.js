import dashboard from "./components/pages/dashboard";
import blankpage from "./components/pages/blank-page";
import button from "./components/pages/button";
import charts from "./components/pages/charts";
import error404 from "./components/pages/error-404";
import error500 from "./components/pages/error-500";
import formsElements from "./components/pages/formsElements";
import icons from "./components/pages/icons";
import login from "./components/pages/login";
import register from "./components/pages/register";
import table from "./components/pages/table";
import typography from "./components/pages/typography";

export default [
    {path: '/', component: dashboard},
    {path: '/blankpage', component: blankpage},
    {path: '/button', component: button},
    {path: '/charts', component: charts},
    {path: '/error404', component: error404},
    {path: '/error500', component: error500},
    {path: '/formsElements', component: formsElements},
    {path: '/icons', component: icons},
    {path: '/login', component: login},
    {path: '/register', component: register},
    {path: '/table', component: table},
    {path: '/typography', component: typography},
    /*{path: '/blog/:id', component: singleBlog}*/
]