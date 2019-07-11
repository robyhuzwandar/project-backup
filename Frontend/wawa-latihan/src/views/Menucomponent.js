import React from 'react';

class Menucomponent extends React.Component{
	render(){
		return(
			<div className="col-lg-12 boxmenu">
				<div className="col-md-3 col-sm-6 col-xs-12">
					<div className="boxmenu-item">
						<span className="boxicon bgblue">
							<i className="fa fa-home"></i>
						</span>
						<div className="labelmenu">
							<span className="judul"><a href="/" >Home</a></span>
						</div>
					</div>
				</div>
				<div className="col-md-3 col-sm-6 col-xs-12">
					<div className="boxmenu-item">
						<span className="boxicon bggreen">
							<i className="fa fa-superpowers"></i>
						</span>
						<div className="labelmenu">
							<span className="judul"><a href="/test1" >Test1</a></span>
						</div>
					</div>
				</div>
				<div className="col-md-3 col-sm-6 col-xs-12">
					<div className="boxmenu-item">
						<span className="boxicon bgyello">
							<i className="fa fa-superpowers"></i>
						</span>
						<div className="labelmenu">
							<span className="judul"><a href="test2" >Test2</a></span>
						</div>
					</div>
				</div>
				<div className="col-md-3 col-sm-6 col-xs-12">
					<div className="boxmenu-item">
						<span className="boxicon bgred">
							<i className="fa fa-superpowers"></i>
						</span>
						<div className="labelmenu">
							<span className="judul"><a href="test3" >Test3</a></span>
						</div>
					</div>
				</div>
			</div>
		)
	}
}
module.exports=Menucomponent;