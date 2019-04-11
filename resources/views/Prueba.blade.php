@extends('layouts.app')

 @section('content')
  <div class="container">
    <div class="card card-default">
      <div class="card-header">
        <h1>Calendario</h1>
      </div>
      <div class="card-body">
        <table class="table" style="text-align: center">
          <tr style="background-color: rgba(74, 139, 186, 0.88);" >
            <td>DOM</td><td>LUN</td><td>MAR</td><td>MIE</td><td>JUE</td><td>VIE</td><td>SAB</td>
          </tr>
          <tr style="background-color: rgba(89, 99, 107, 0.2);">
            <td>31</td><td>1</td><td>2</td><td>3</td><td style="background-color: rgba(114, 57, 196, 0.6);"><p class="lead">4</p></td><td>5</td><td>6</td>
          </tr>
          <tr style="background-color: rgba(74, 139, 186, 0.6);">
            <td>7</td><td>8</td><td>9</td><td>10</td><td>11</td><td>12</td><td>13</td>
          </tr>
          <tr style="background-color: rgba(89, 99, 107, 0.2);">
            <td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td><td>20</td>
          </tr>
          <tr style="background-color: rgba(74, 139, 186, 0.6);">
            <td>21</td><td>22</td><td>23</td><td>24</td><td>25</td><td>26</td><td>27</td>
          </tr>
          <tr style="background-color: rgba(89, 99, 107, 0.2);">
            <td>28</td><td>29</td><td>30</td><td>1</td><td>2</td><td>3</td><td>4</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
 @endsection
