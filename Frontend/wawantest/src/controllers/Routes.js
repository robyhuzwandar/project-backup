import React from 'react';
import {
  BrowserRouter as Router,
  Route,
  Link,
  Redirect,
  withRouter
} from "react-router-dom";
import  './../assets/common/css/bootstrap.min.css';
import  './../assets/common/custome.css';
import  './../assets/common/css/font-awesome.min.css';
import Home from './../views/Home';
const checkAuth = () => (
  <Router>
    <div>
      <Route  exact path="/" component={Home} />
      <Route  path="/test1" component={Home} />
      <Route  path="/test2" component={Home} />
      <Route  path="/test3" component={Home} />
      <Route  path="/test4" component={Home} />
      <Route  path="/test5" component={Home} />
    </div>
  </Router>
);
export default checkAuth;