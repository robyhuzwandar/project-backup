import React from 'react';
import Menucomponent from './Menucomponent';
import {Provider} from 'react-redux';
import {createStore} from 'redux';

import Test1 from './../views/Test1';
import Test2 from './../views/Test2';
import Test3 from './../views/Test3';
import Footer from './../views/Footer';

const initialState = {id:0,
					intangka:0,
					intpangkat:0,
					hasil:0,
					hasiltambah:0,
					viewadd:false,
					formData:[],
					error:false,
					errormsg:'',
					mode:'',
					detailKontak:{element:0,message:'OK',page:'',result:[{
						id:'',
						name:'',
						address:'',
						phone:'',
						email:'',
						picture:''
					}],
					dataEdit:{
						id:'',
						name:'',
						address:'',
						phone:'',
						email:'',
						picture:''
					}}
};
const Reducers=(state=initialState,action)=>{
	switch(action.type){
		case 'hitungpangkat' :
			var _angka       = (action.aData.angka.value!=0) ? Number(action.aData.angka.value) : 0;
			var _pangkat     = (action.aData.pangkat.value!=0) ? Number(action.aData.pangkat.value) : 1;
			var _hasil       = Math.pow(_angka,_pangkat);
			var _arrayHasil  = (_hasil).toString().match(/[0-9]/g);
			var _hasilTambah = 0;

			_arrayHasil.forEach(function(data,i){
				_hasilTambah     += (Number(data)) ? Number(data) : 0;
			})
			return {...state,hasil:_hasil,hasiltambah:_hasilTambah}
		break;
		case 'checkdata' :
			var ArrayData = [];
			var _awal     = (action.aData.awal.value !=0) 	? Number(action.aData.awal.value)  : 0;
			var _akhir    = (action.aData.akhir.value!=0) 	? Number(action.aData.akhir.value) : 0;

			var index=0;
			if (_awal >0 && _akhir >0){
				for (var i=_awal;i<=_akhir;i++){
					if (i % 3==0 || i % 4==0){
						index++;
						if (i % 3==0 && i % 4==0){
							ArrayData.push({nomor:index,angka:"yeay!"});
						}else {
							ArrayData.push({nomor:index,angka:i});
						}
					}
				}
			}
			return {formData:ArrayData};
		break
		case 'getdatakontak' :
			return {...state,detailKontak:action.payload,viewadd:false,mode:''};
		break;
		case 'toogleadd' :
			return {...state,viewadd:action.view}
		break;
		case 'addkontak' :
			return {...state,viewadd:false};
		break;
		case 'deletekontak' :
			return state;
		break;
		case 'editkontak' :
			return {...state,viewadd:true,mode:action.params,dataEdit:action.aData};
		break;
		case 'errormsg' :
			if (!action.continues){
				return {...state,error:true,errormsg:action.errmsg};
			}else{
				return {...state,error:false,errormsg:action.errmsg};
			}
		break;
		case 'batal' :
			return {...state,viewadd:action.params,mode:''};
		break;
		default : return state;
	}
}

const store=createStore(Reducers);

class Home extends React.Component{
	render(){
		var Page=[];
		const pathrouter=(this.props.match.url).substring(1);
		switch(pathrouter){
			case 'test1' :
				Page=Test1;
			break;
			case 'test2' :
				Page=Test2;
			break;
			case 'test3' :
				Page=Test3;
			break;
			default :
			Page=()=>(<div className="col-lg-12 boxpage">
						<div className="col-lg-12 home">
							<h2>Selamat datang di App</h2>
							<h1>Test React Developer</h1>
							<h2>By</h2>

							<h2>(Wawan Agus Hendrayadi)</h2>
						</div>
					</div>
			);
			
		}
	
		return(
			<Provider store={store}>
				<div className="row">
					<Menucomponent />
					<Page {...store} />
					<Footer />
				</div>

			</Provider>
		)
	}
}

module.exports=Home;