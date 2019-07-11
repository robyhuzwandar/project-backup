import React from 'react';
import { wpost } from 'wawanajax';
import { Const } from '../const/Const';

export default class HomeCrud extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            test: 'test',
            data: {
                name: '',
                address: '',
                phone: '',
                barang: []
            }

        }
    }

    componentAfterMount = this.componentAfterMount.bind(this);
    afterGetData = this.afterGetData.bind(this);
    componentDidMount() {
        console.log("componentDidMount")
        // this.setState({ test: 'test1' });
        // this.afterGetData();
    }


    componentWillMount() {
        console.log("componentWillMount")
        // this.setState({ test: 'test2' });
    }

    afterGetData(callback, scope) {
        console.log("RESPON");
        console.log(callback);

        this.setState({
            data: callback.data.profile
        })
    }

    componentAfterMount() {
        const _temtdata = JSON.stringify({ 'username': 'awan01', 'password': 'parkour88' });
        const _api = Const.api2 + 'jalan-masuk/signin'
        console.log(_temtdata);
        console.log(_api);
        wpost(this, _api, _temtdata, this.afterGetData);
    }


    render() {
        console.log("render");
        const { test, data } = this.state;
        var details = [];
        if (data.barang.length > 0) {
            details = data.barang.map((items, idx) => {
                return (
                    <tr key={idx}>
                        <td>{idx+Number(1)}</td>
                        <td>{items.nama}</td>
                        <td>{items.harga}</td>
                        <td>{items.stok}</td>
                        <td>{items.deskripsi}</td>
                    </tr>
                )
            })
        }

        console.log("details : " + details)
        return (
            <div className="row">
                <div className="container">
                    <div className="col-xs-12">
                        <input type="text" name="username" />
                        <input type="text" name="username" />
                        <button onClick={() => this.componentAfterMount()} className="btn btn-primary">Submit</button>
                        <br />
                        <hr />
                            Nama : {data.name} <br />
                            Address : {data.address} <br />
                            Phone : {data.phone} <br />
                            Birt : {data.birth} <br />
                        <br />
                        <hr />

                        <table className="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>

                            <tbody>
                                {details}
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        )
    }
}

