import React from 'react';

export const hitungPangkat = (aData)=>({
	type:"hitungpangkat",
	aData
})
export const checkData     = (aData)=>({
	type:"checkdata",
	aData
})
export const toogleAdd     = (view)=>({
	type:'toogleadd',
	view
})
export const getDataKontak = (payload)=>({
	type:'getdatakontak',
	payload
})
export const addKontak     = (view,aData)=>({
	type:"addkontak",
	view,
	aData
})
export const deleteKontak  = (aData)=>({
	type:"deletekontak",
	aData
})
export const editKontak    = (params,aData)=>({
	type:"editkontak",
	params,
	aData
})
export const errorMsg      = (continues,errmsg)=>({
	type:"errormsg",
	continues,
	errmsg
})
export const handleBatal   = (params)=>({
	type:"batal",
	params
})