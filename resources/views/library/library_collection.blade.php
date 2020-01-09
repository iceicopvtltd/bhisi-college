@extends('layouts.app')
@section('title', 'LIBRARY COLLECTION')
@section('content')
<div class="col-12 feature-block">
    <h4 class="text-center">LIBRARY COLLECTION </h4>

    <table class="table striped border">
        <thead style="background: #333333 ; color: whitesmoke;">
            <th>Sr.No</th>
            <th>Collection</th>
            <th>Titles</th>
            <th>Total Books</th>
            <th> Price</th>
            <th> Print Price</th>
        </thead>
        <tbody>
            <tr>
                <td> 1.</td>
                <td> Books </td>
                <td>1204 </td>
                <td>1593</td>
                <td>192486.59</td>
                <td>237852.10</td>
            </tr>
            <tr>
                <td> 2.</td>
                <td> Textbooks </td>
                <td>198</td>
                <td>969</td>
                <td>102994.80</td>
                <td>158678.00</td>


            </tr>
            <tr>
                <td>3. </td>
                <td>Reference Books</td>
                <td>62</td>
                <td>66</td>
                <td>13300.60</td>
                <td>19820.00</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Atlas</td>
                <td>2</td>
                <td>2</td>
                <td>255.00</td>
                <td>255.00</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>C.D.'s</td>
                <td>13</td>
                <td>13</td>
                <td>703.50</td>
                <td>2090.00</td>
            </tr>
            <tr>
                <td></td>
                <th>TOTAL</th>
                <th>1472</th>
                <th>2643</th>
                <th>309740.49</th>
                <th>418695.10</th>
            </tr>


        </tbody>
    </table>
    <div>
    <h5>MISCLINIOUS READING BOOKS</h5>
     <table class="table striped border">
            <thead style="background: #333333 ; color: whitesmoke;">
                <th>Sr.No</th>
                <th>Collection</th>
                <th>Titles</th>
                <th>Total Books</th>
                <th>Books Price</th>

            </thead>
            <tbody>
                <tr>
                    <td> 1.</td>
                    <td> Competative Books </td>
                    <td>29 </td>
                    <td>30</td>
                    <td>10,269.00</td>

                </tr>
            </tbody>
        </table>
</div>
</div>

@endsection
