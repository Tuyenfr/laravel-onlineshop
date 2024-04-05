
@extends('admin_layout.master')

@section('title')

Country

@endsection

@section('content')

	  <!-- start content -->
    <div class="content-wrapper">
      <section class="content-header">
         <div class="content-header-left">
            <h1>View Countries</h1>
         </div>
         <div class="content-header-right">
            <a href="country-add.php" class="btn btn-primary btn-sm">Add New</a>
         </div>
      </section>
      <section class="content">
         <div class="row">
            <div class="col-md-12">
               <div class="box box-info">
                  <div class="box-body table-responsive">
                     <table id="example1" class="table table-bordered table-hover table-striped">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Country Name</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1</td>
                              <td>Afghanistan</td>
                              <td>
                                 <a href="country-edit.php?id=1" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=1" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>2</td>
                              <td>Albania</td>
                              <td>
                                 <a href="country-edit.php?id=2" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=2" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>3</td>
                              <td>Algeria</td>
                              <td>
                                 <a href="country-edit.php?id=3" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=3" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>4</td>
                              <td>American Samoa</td>
                              <td>
                                 <a href="country-edit.php?id=4" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=4" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>5</td>
                              <td>Andorra</td>
                              <td>
                                 <a href="country-edit.php?id=5" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=5" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>6</td>
                              <td>Angola</td>
                              <td>
                                 <a href="country-edit.php?id=6" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=6" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>7</td>
                              <td>Anguilla</td>
                              <td>
                                 <a href="country-edit.php?id=7" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=7" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>8</td>
                              <td>Antarctica</td>
                              <td>
                                 <a href="country-edit.php?id=8" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=8" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>9</td>
                              <td>Antigua and Barbuda</td>
                              <td>
                                 <a href="country-edit.php?id=9" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=9" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>10</td>
                              <td>Argentina</td>
                              <td>
                                 <a href="country-edit.php?id=10" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=10" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>11</td>
                              <td>Armenia</td>
                              <td>
                                 <a href="country-edit.php?id=11" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=11" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>12</td>
                              <td>Aruba</td>
                              <td>
                                 <a href="country-edit.php?id=12" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=12" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>13</td>
                              <td>Australia</td>
                              <td>
                                 <a href="country-edit.php?id=13" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=13" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>14</td>
                              <td>Austria</td>
                              <td>
                                 <a href="country-edit.php?id=14" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=14" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>15</td>
                              <td>Azerbaijan</td>
                              <td>
                                 <a href="country-edit.php?id=15" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=15" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>16</td>
                              <td>Bahamas</td>
                              <td>
                                 <a href="country-edit.php?id=16" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=16" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>17</td>
                              <td>Bahrain</td>
                              <td>
                                 <a href="country-edit.php?id=17" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=17" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>18</td>
                              <td>Bangladesh</td>
                              <td>
                                 <a href="country-edit.php?id=18" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=18" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>19</td>
                              <td>Barbados</td>
                              <td>
                                 <a href="country-edit.php?id=19" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=19" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>20</td>
                              <td>Belarus</td>
                              <td>
                                 <a href="country-edit.php?id=20" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=20" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>21</td>
                              <td>Belgium</td>
                              <td>
                                 <a href="country-edit.php?id=21" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=21" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>22</td>
                              <td>Belize</td>
                              <td>
                                 <a href="country-edit.php?id=22" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=22" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>23</td>
                              <td>Benin</td>
                              <td>
                                 <a href="country-edit.php?id=23" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=23" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>24</td>
                              <td>Bermuda</td>
                              <td>
                                 <a href="country-edit.php?id=24" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=24" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>25</td>
                              <td>Bhutan</td>
                              <td>
                                 <a href="country-edit.php?id=25" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=25" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>26</td>
                              <td>Bolivia</td>
                              <td>
                                 <a href="country-edit.php?id=26" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=26" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>27</td>
                              <td>Bosnia and Herzegovina</td>
                              <td>
                                 <a href="country-edit.php?id=27" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=27" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>28</td>
                              <td>Botswana</td>
                              <td>
                                 <a href="country-edit.php?id=28" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=28" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>29</td>
                              <td>Bouvet Island</td>
                              <td>
                                 <a href="country-edit.php?id=29" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=29" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>30</td>
                              <td>Brazil</td>
                              <td>
                                 <a href="country-edit.php?id=30" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=30" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>31</td>
                              <td>British Indian Ocean Territory</td>
                              <td>
                                 <a href="country-edit.php?id=31" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=31" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>32</td>
                              <td>Brunei Darussalam</td>
                              <td>
                                 <a href="country-edit.php?id=32" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=32" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>33</td>
                              <td>Bulgaria</td>
                              <td>
                                 <a href="country-edit.php?id=33" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=33" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>34</td>
                              <td>Burkina Faso</td>
                              <td>
                                 <a href="country-edit.php?id=34" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=34" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>35</td>
                              <td>Burundi</td>
                              <td>
                                 <a href="country-edit.php?id=35" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=35" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>36</td>
                              <td>Cambodia</td>
                              <td>
                                 <a href="country-edit.php?id=36" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=36" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>37</td>
                              <td>Cameroon</td>
                              <td>
                                 <a href="country-edit.php?id=37" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=37" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>38</td>
                              <td>Canada</td>
                              <td>
                                 <a href="country-edit.php?id=38" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=38" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>39</td>
                              <td>Cape Verde</td>
                              <td>
                                 <a href="country-edit.php?id=39" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=39" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>40</td>
                              <td>Cayman Islands</td>
                              <td>
                                 <a href="country-edit.php?id=40" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=40" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>41</td>
                              <td>Central African Republic</td>
                              <td>
                                 <a href="country-edit.php?id=41" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=41" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>42</td>
                              <td>Chad</td>
                              <td>
                                 <a href="country-edit.php?id=42" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=42" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>43</td>
                              <td>Chile</td>
                              <td>
                                 <a href="country-edit.php?id=43" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=43" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>44</td>
                              <td>China</td>
                              <td>
                                 <a href="country-edit.php?id=44" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=44" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>45</td>
                              <td>Christmas Island</td>
                              <td>
                                 <a href="country-edit.php?id=45" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=45" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>46</td>
                              <td>Cocos (Keeling) Islands</td>
                              <td>
                                 <a href="country-edit.php?id=46" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=46" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>47</td>
                              <td>Colombia</td>
                              <td>
                                 <a href="country-edit.php?id=47" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=47" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>48</td>
                              <td>Comoros</td>
                              <td>
                                 <a href="country-edit.php?id=48" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=48" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>49</td>
                              <td>Congo</td>
                              <td>
                                 <a href="country-edit.php?id=49" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=49" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>50</td>
                              <td>Cook Islands</td>
                              <td>
                                 <a href="country-edit.php?id=50" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=50" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>51</td>
                              <td>Costa Rica</td>
                              <td>
                                 <a href="country-edit.php?id=51" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=51" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>52</td>
                              <td>Croatia (Hrvatska)</td>
                              <td>
                                 <a href="country-edit.php?id=52" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=52" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>53</td>
                              <td>Cuba</td>
                              <td>
                                 <a href="country-edit.php?id=53" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=53" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>54</td>
                              <td>Cyprus</td>
                              <td>
                                 <a href="country-edit.php?id=54" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=54" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>55</td>
                              <td>Czech Republic</td>
                              <td>
                                 <a href="country-edit.php?id=55" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=55" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>56</td>
                              <td>Denmark</td>
                              <td>
                                 <a href="country-edit.php?id=56" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=56" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>57</td>
                              <td>Djibouti</td>
                              <td>
                                 <a href="country-edit.php?id=57" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=57" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>58</td>
                              <td>Dominica</td>
                              <td>
                                 <a href="country-edit.php?id=58" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=58" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>59</td>
                              <td>Dominican Republic</td>
                              <td>
                                 <a href="country-edit.php?id=59" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=59" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>60</td>
                              <td>East Timor</td>
                              <td>
                                 <a href="country-edit.php?id=60" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=60" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>61</td>
                              <td>Ecuador</td>
                              <td>
                                 <a href="country-edit.php?id=61" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=61" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>62</td>
                              <td>Egypt</td>
                              <td>
                                 <a href="country-edit.php?id=62" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=62" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>63</td>
                              <td>El Salvador</td>
                              <td>
                                 <a href="country-edit.php?id=63" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=63" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>64</td>
                              <td>Equatorial Guinea</td>
                              <td>
                                 <a href="country-edit.php?id=64" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=64" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>65</td>
                              <td>Eritrea</td>
                              <td>
                                 <a href="country-edit.php?id=65" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=65" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>66</td>
                              <td>Estonia</td>
                              <td>
                                 <a href="country-edit.php?id=66" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=66" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>67</td>
                              <td>Ethiopia</td>
                              <td>
                                 <a href="country-edit.php?id=67" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=67" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>68</td>
                              <td>Falkland Islands (Malvinas)</td>
                              <td>
                                 <a href="country-edit.php?id=68" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=68" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>69</td>
                              <td>Faroe Islands</td>
                              <td>
                                 <a href="country-edit.php?id=69" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=69" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>70</td>
                              <td>Fiji</td>
                              <td>
                                 <a href="country-edit.php?id=70" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=70" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>71</td>
                              <td>Finland</td>
                              <td>
                                 <a href="country-edit.php?id=71" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=71" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>72</td>
                              <td>France</td>
                              <td>
                                 <a href="country-edit.php?id=72" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=72" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>73</td>
                              <td>France, Metropolitan</td>
                              <td>
                                 <a href="country-edit.php?id=73" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=73" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>74</td>
                              <td>French Guiana</td>
                              <td>
                                 <a href="country-edit.php?id=74" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=74" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>75</td>
                              <td>French Polynesia</td>
                              <td>
                                 <a href="country-edit.php?id=75" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=75" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>76</td>
                              <td>French Southern Territories</td>
                              <td>
                                 <a href="country-edit.php?id=76" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=76" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>77</td>
                              <td>Gabon</td>
                              <td>
                                 <a href="country-edit.php?id=77" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=77" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>78</td>
                              <td>Gambia</td>
                              <td>
                                 <a href="country-edit.php?id=78" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=78" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>79</td>
                              <td>Georgia</td>
                              <td>
                                 <a href="country-edit.php?id=79" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=79" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>80</td>
                              <td>Germany</td>
                              <td>
                                 <a href="country-edit.php?id=80" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=80" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>81</td>
                              <td>Ghana</td>
                              <td>
                                 <a href="country-edit.php?id=81" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=81" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>82</td>
                              <td>Gibraltar</td>
                              <td>
                                 <a href="country-edit.php?id=82" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=82" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>83</td>
                              <td>Guernsey</td>
                              <td>
                                 <a href="country-edit.php?id=83" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=83" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>84</td>
                              <td>Greece</td>
                              <td>
                                 <a href="country-edit.php?id=84" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=84" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>85</td>
                              <td>Greenland</td>
                              <td>
                                 <a href="country-edit.php?id=85" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=85" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>86</td>
                              <td>Grenada</td>
                              <td>
                                 <a href="country-edit.php?id=86" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=86" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>87</td>
                              <td>Guadeloupe</td>
                              <td>
                                 <a href="country-edit.php?id=87" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=87" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>88</td>
                              <td>Guam</td>
                              <td>
                                 <a href="country-edit.php?id=88" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=88" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>89</td>
                              <td>Guatemala</td>
                              <td>
                                 <a href="country-edit.php?id=89" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=89" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>90</td>
                              <td>Guinea</td>
                              <td>
                                 <a href="country-edit.php?id=90" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=90" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>91</td>
                              <td>Guinea-Bissau</td>
                              <td>
                                 <a href="country-edit.php?id=91" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=91" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>92</td>
                              <td>Guyana</td>
                              <td>
                                 <a href="country-edit.php?id=92" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=92" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>93</td>
                              <td>Haiti</td>
                              <td>
                                 <a href="country-edit.php?id=93" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=93" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>94</td>
                              <td>Heard and Mc Donald Islands</td>
                              <td>
                                 <a href="country-edit.php?id=94" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=94" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>95</td>
                              <td>Honduras</td>
                              <td>
                                 <a href="country-edit.php?id=95" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=95" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>96</td>
                              <td>Hong Kong</td>
                              <td>
                                 <a href="country-edit.php?id=96" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=96" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>97</td>
                              <td>Hungary</td>
                              <td>
                                 <a href="country-edit.php?id=97" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=97" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>98</td>
                              <td>Iceland</td>
                              <td>
                                 <a href="country-edit.php?id=98" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=98" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>99</td>
                              <td>India</td>
                              <td>
                                 <a href="country-edit.php?id=99" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=99" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>100</td>
                              <td>Isle of Man</td>
                              <td>
                                 <a href="country-edit.php?id=100" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=100" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>101</td>
                              <td>Indonesia</td>
                              <td>
                                 <a href="country-edit.php?id=101" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=101" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>102</td>
                              <td>Iran (Islamic Republic of)</td>
                              <td>
                                 <a href="country-edit.php?id=102" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=102" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>103</td>
                              <td>Iraq</td>
                              <td>
                                 <a href="country-edit.php?id=103" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=103" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>104</td>
                              <td>Ireland</td>
                              <td>
                                 <a href="country-edit.php?id=104" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=104" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>105</td>
                              <td>Israel</td>
                              <td>
                                 <a href="country-edit.php?id=105" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=105" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>106</td>
                              <td>Italy</td>
                              <td>
                                 <a href="country-edit.php?id=106" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=106" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>107</td>
                              <td>Ivory Coast</td>
                              <td>
                                 <a href="country-edit.php?id=107" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=107" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>108</td>
                              <td>Jersey</td>
                              <td>
                                 <a href="country-edit.php?id=108" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=108" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>109</td>
                              <td>Jamaica</td>
                              <td>
                                 <a href="country-edit.php?id=109" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=109" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>110</td>
                              <td>Japan</td>
                              <td>
                                 <a href="country-edit.php?id=110" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=110" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>111</td>
                              <td>Jordan</td>
                              <td>
                                 <a href="country-edit.php?id=111" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=111" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>112</td>
                              <td>Kazakhstan</td>
                              <td>
                                 <a href="country-edit.php?id=112" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=112" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>113</td>
                              <td>Kenya</td>
                              <td>
                                 <a href="country-edit.php?id=113" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=113" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>114</td>
                              <td>Kiribati</td>
                              <td>
                                 <a href="country-edit.php?id=114" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=114" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>115</td>
                              <td>Korea, Democratic People's Republic of</td>
                              <td>
                                 <a href="country-edit.php?id=115" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=115" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>116</td>
                              <td>Korea, Republic of</td>
                              <td>
                                 <a href="country-edit.php?id=116" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=116" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>117</td>
                              <td>Kosovo</td>
                              <td>
                                 <a href="country-edit.php?id=117" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=117" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>118</td>
                              <td>Kuwait</td>
                              <td>
                                 <a href="country-edit.php?id=118" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=118" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>119</td>
                              <td>Kyrgyzstan</td>
                              <td>
                                 <a href="country-edit.php?id=119" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=119" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>120</td>
                              <td>Lao People's Democratic Republic</td>
                              <td>
                                 <a href="country-edit.php?id=120" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=120" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>121</td>
                              <td>Latvia</td>
                              <td>
                                 <a href="country-edit.php?id=121" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=121" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>122</td>
                              <td>Lebanon</td>
                              <td>
                                 <a href="country-edit.php?id=122" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=122" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>123</td>
                              <td>Lesotho</td>
                              <td>
                                 <a href="country-edit.php?id=123" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=123" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>124</td>
                              <td>Liberia</td>
                              <td>
                                 <a href="country-edit.php?id=124" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=124" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>125</td>
                              <td>Libyan Arab Jamahiriya</td>
                              <td>
                                 <a href="country-edit.php?id=125" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=125" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>126</td>
                              <td>Liechtenstein</td>
                              <td>
                                 <a href="country-edit.php?id=126" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=126" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>127</td>
                              <td>Lithuania</td>
                              <td>
                                 <a href="country-edit.php?id=127" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=127" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>128</td>
                              <td>Luxembourg</td>
                              <td>
                                 <a href="country-edit.php?id=128" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=128" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>129</td>
                              <td>Macau</td>
                              <td>
                                 <a href="country-edit.php?id=129" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=129" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>130</td>
                              <td>Macedonia</td>
                              <td>
                                 <a href="country-edit.php?id=130" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=130" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>131</td>
                              <td>Madagascar</td>
                              <td>
                                 <a href="country-edit.php?id=131" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=131" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>132</td>
                              <td>Malawi</td>
                              <td>
                                 <a href="country-edit.php?id=132" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=132" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>133</td>
                              <td>Malaysia</td>
                              <td>
                                 <a href="country-edit.php?id=133" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=133" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>134</td>
                              <td>Maldives</td>
                              <td>
                                 <a href="country-edit.php?id=134" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=134" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>135</td>
                              <td>Mali</td>
                              <td>
                                 <a href="country-edit.php?id=135" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=135" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>136</td>
                              <td>Malta</td>
                              <td>
                                 <a href="country-edit.php?id=136" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=136" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>137</td>
                              <td>Marshall Islands</td>
                              <td>
                                 <a href="country-edit.php?id=137" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=137" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>138</td>
                              <td>Martinique</td>
                              <td>
                                 <a href="country-edit.php?id=138" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=138" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>139</td>
                              <td>Mauritania</td>
                              <td>
                                 <a href="country-edit.php?id=139" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=139" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>140</td>
                              <td>Mauritius</td>
                              <td>
                                 <a href="country-edit.php?id=140" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=140" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>141</td>
                              <td>Mayotte</td>
                              <td>
                                 <a href="country-edit.php?id=141" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=141" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>142</td>
                              <td>Mexico</td>
                              <td>
                                 <a href="country-edit.php?id=142" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=142" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>143</td>
                              <td>Micronesia, Federated States of</td>
                              <td>
                                 <a href="country-edit.php?id=143" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=143" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>144</td>
                              <td>Moldova, Republic of</td>
                              <td>
                                 <a href="country-edit.php?id=144" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=144" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>145</td>
                              <td>Monaco</td>
                              <td>
                                 <a href="country-edit.php?id=145" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=145" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>146</td>
                              <td>Mongolia</td>
                              <td>
                                 <a href="country-edit.php?id=146" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=146" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>147</td>
                              <td>Montenegro</td>
                              <td>
                                 <a href="country-edit.php?id=147" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=147" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>148</td>
                              <td>Montserrat</td>
                              <td>
                                 <a href="country-edit.php?id=148" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=148" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>149</td>
                              <td>Morocco</td>
                              <td>
                                 <a href="country-edit.php?id=149" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=149" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>150</td>
                              <td>Mozambique</td>
                              <td>
                                 <a href="country-edit.php?id=150" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=150" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>151</td>
                              <td>Myanmar</td>
                              <td>
                                 <a href="country-edit.php?id=151" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=151" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>152</td>
                              <td>Namibia</td>
                              <td>
                                 <a href="country-edit.php?id=152" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=152" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>153</td>
                              <td>Nauru</td>
                              <td>
                                 <a href="country-edit.php?id=153" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=153" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>154</td>
                              <td>Nepal</td>
                              <td>
                                 <a href="country-edit.php?id=154" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=154" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>155</td>
                              <td>Netherlands</td>
                              <td>
                                 <a href="country-edit.php?id=155" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=155" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>156</td>
                              <td>Netherlands Antilles</td>
                              <td>
                                 <a href="country-edit.php?id=156" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=156" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>157</td>
                              <td>New Caledonia</td>
                              <td>
                                 <a href="country-edit.php?id=157" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=157" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>158</td>
                              <td>New Zealand</td>
                              <td>
                                 <a href="country-edit.php?id=158" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=158" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>159</td>
                              <td>Nicaragua</td>
                              <td>
                                 <a href="country-edit.php?id=159" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=159" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>160</td>
                              <td>Niger</td>
                              <td>
                                 <a href="country-edit.php?id=160" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=160" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>161</td>
                              <td>Nigeria</td>
                              <td>
                                 <a href="country-edit.php?id=161" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=161" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>162</td>
                              <td>Niue</td>
                              <td>
                                 <a href="country-edit.php?id=162" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=162" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>163</td>
                              <td>Norfolk Island</td>
                              <td>
                                 <a href="country-edit.php?id=163" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=163" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>164</td>
                              <td>Northern Mariana Islands</td>
                              <td>
                                 <a href="country-edit.php?id=164" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=164" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>165</td>
                              <td>Norway</td>
                              <td>
                                 <a href="country-edit.php?id=165" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=165" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>166</td>
                              <td>Oman</td>
                              <td>
                                 <a href="country-edit.php?id=166" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=166" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>167</td>
                              <td>Pakistan</td>
                              <td>
                                 <a href="country-edit.php?id=167" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=167" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>168</td>
                              <td>Palau</td>
                              <td>
                                 <a href="country-edit.php?id=168" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=168" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>169</td>
                              <td>Palestine</td>
                              <td>
                                 <a href="country-edit.php?id=169" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=169" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>170</td>
                              <td>Panama</td>
                              <td>
                                 <a href="country-edit.php?id=170" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=170" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>171</td>
                              <td>Papua New Guinea</td>
                              <td>
                                 <a href="country-edit.php?id=171" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=171" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>172</td>
                              <td>Paraguay</td>
                              <td>
                                 <a href="country-edit.php?id=172" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=172" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>173</td>
                              <td>Peru</td>
                              <td>
                                 <a href="country-edit.php?id=173" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=173" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>174</td>
                              <td>Philippines</td>
                              <td>
                                 <a href="country-edit.php?id=174" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=174" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>175</td>
                              <td>Pitcairn</td>
                              <td>
                                 <a href="country-edit.php?id=175" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=175" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>176</td>
                              <td>Poland</td>
                              <td>
                                 <a href="country-edit.php?id=176" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=176" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>177</td>
                              <td>Portugal</td>
                              <td>
                                 <a href="country-edit.php?id=177" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=177" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>178</td>
                              <td>Puerto Rico</td>
                              <td>
                                 <a href="country-edit.php?id=178" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=178" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>179</td>
                              <td>Qatar</td>
                              <td>
                                 <a href="country-edit.php?id=179" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=179" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>180</td>
                              <td>Reunion</td>
                              <td>
                                 <a href="country-edit.php?id=180" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=180" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>181</td>
                              <td>Romania</td>
                              <td>
                                 <a href="country-edit.php?id=181" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=181" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>182</td>
                              <td>Russian Federation</td>
                              <td>
                                 <a href="country-edit.php?id=182" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=182" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>183</td>
                              <td>Rwanda</td>
                              <td>
                                 <a href="country-edit.php?id=183" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=183" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>184</td>
                              <td>Saint Kitts and Nevis</td>
                              <td>
                                 <a href="country-edit.php?id=184" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=184" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>185</td>
                              <td>Saint Lucia</td>
                              <td>
                                 <a href="country-edit.php?id=185" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=185" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>186</td>
                              <td>Saint Vincent and the Grenadines</td>
                              <td>
                                 <a href="country-edit.php?id=186" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=186" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>187</td>
                              <td>Samoa</td>
                              <td>
                                 <a href="country-edit.php?id=187" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=187" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>188</td>
                              <td>San Marino</td>
                              <td>
                                 <a href="country-edit.php?id=188" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=188" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>189</td>
                              <td>Sao Tome and Principe</td>
                              <td>
                                 <a href="country-edit.php?id=189" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=189" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>190</td>
                              <td>Saudi Arabia</td>
                              <td>
                                 <a href="country-edit.php?id=190" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=190" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>191</td>
                              <td>Senegal</td>
                              <td>
                                 <a href="country-edit.php?id=191" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=191" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>192</td>
                              <td>Serbia</td>
                              <td>
                                 <a href="country-edit.php?id=192" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=192" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>193</td>
                              <td>Seychelles</td>
                              <td>
                                 <a href="country-edit.php?id=193" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=193" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>194</td>
                              <td>Sierra Leone</td>
                              <td>
                                 <a href="country-edit.php?id=194" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=194" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>195</td>
                              <td>Singapore</td>
                              <td>
                                 <a href="country-edit.php?id=195" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=195" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>196</td>
                              <td>Slovakia</td>
                              <td>
                                 <a href="country-edit.php?id=196" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=196" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>197</td>
                              <td>Slovenia</td>
                              <td>
                                 <a href="country-edit.php?id=197" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=197" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>198</td>
                              <td>Solomon Islands</td>
                              <td>
                                 <a href="country-edit.php?id=198" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=198" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>199</td>
                              <td>Somalia</td>
                              <td>
                                 <a href="country-edit.php?id=199" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=199" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>200</td>
                              <td>South Africa</td>
                              <td>
                                 <a href="country-edit.php?id=200" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=200" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>201</td>
                              <td>South Georgia South Sandwich Islands</td>
                              <td>
                                 <a href="country-edit.php?id=201" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=201" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>202</td>
                              <td>Spain</td>
                              <td>
                                 <a href="country-edit.php?id=202" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=202" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>203</td>
                              <td>Sri Lanka</td>
                              <td>
                                 <a href="country-edit.php?id=203" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=203" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>204</td>
                              <td>St. Helena</td>
                              <td>
                                 <a href="country-edit.php?id=204" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=204" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>205</td>
                              <td>St. Pierre and Miquelon</td>
                              <td>
                                 <a href="country-edit.php?id=205" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=205" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>206</td>
                              <td>Sudan</td>
                              <td>
                                 <a href="country-edit.php?id=206" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=206" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>207</td>
                              <td>Suriname</td>
                              <td>
                                 <a href="country-edit.php?id=207" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=207" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>208</td>
                              <td>Svalbard and Jan Mayen Islands</td>
                              <td>
                                 <a href="country-edit.php?id=208" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=208" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>209</td>
                              <td>Swaziland</td>
                              <td>
                                 <a href="country-edit.php?id=209" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=209" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>210</td>
                              <td>Sweden</td>
                              <td>
                                 <a href="country-edit.php?id=210" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=210" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>211</td>
                              <td>Switzerland</td>
                              <td>
                                 <a href="country-edit.php?id=211" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=211" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>212</td>
                              <td>Syrian Arab Republic</td>
                              <td>
                                 <a href="country-edit.php?id=212" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=212" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>213</td>
                              <td>Taiwan</td>
                              <td>
                                 <a href="country-edit.php?id=213" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=213" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>214</td>
                              <td>Tajikistan</td>
                              <td>
                                 <a href="country-edit.php?id=214" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=214" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>215</td>
                              <td>Tanzania, United Republic of</td>
                              <td>
                                 <a href="country-edit.php?id=215" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=215" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>216</td>
                              <td>Thailand</td>
                              <td>
                                 <a href="country-edit.php?id=216" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=216" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>217</td>
                              <td>Togo</td>
                              <td>
                                 <a href="country-edit.php?id=217" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=217" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>218</td>
                              <td>Tokelau</td>
                              <td>
                                 <a href="country-edit.php?id=218" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=218" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>219</td>
                              <td>Tonga</td>
                              <td>
                                 <a href="country-edit.php?id=219" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=219" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>220</td>
                              <td>Trinidad and Tobago</td>
                              <td>
                                 <a href="country-edit.php?id=220" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=220" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>221</td>
                              <td>Tunisia</td>
                              <td>
                                 <a href="country-edit.php?id=221" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=221" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>222</td>
                              <td>Turkey</td>
                              <td>
                                 <a href="country-edit.php?id=222" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=222" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>223</td>
                              <td>Turkmenistan</td>
                              <td>
                                 <a href="country-edit.php?id=223" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=223" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>224</td>
                              <td>Turks and Caicos Islands</td>
                              <td>
                                 <a href="country-edit.php?id=224" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=224" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>225</td>
                              <td>Tuvalu</td>
                              <td>
                                 <a href="country-edit.php?id=225" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=225" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>226</td>
                              <td>Uganda</td>
                              <td>
                                 <a href="country-edit.php?id=226" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=226" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>227</td>
                              <td>Ukraine</td>
                              <td>
                                 <a href="country-edit.php?id=227" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=227" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>228</td>
                              <td>United Arab Emirates</td>
                              <td>
                                 <a href="country-edit.php?id=228" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=228" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>229</td>
                              <td>United Kingdom</td>
                              <td>
                                 <a href="country-edit.php?id=229" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=229" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>230</td>
                              <td>United States</td>
                              <td>
                                 <a href="country-edit.php?id=230" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=230" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>231</td>
                              <td>United States minor outlying islands</td>
                              <td>
                                 <a href="country-edit.php?id=231" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=231" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>232</td>
                              <td>Uruguay</td>
                              <td>
                                 <a href="country-edit.php?id=232" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=232" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>233</td>
                              <td>Uzbekistan</td>
                              <td>
                                 <a href="country-edit.php?id=233" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=233" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>234</td>
                              <td>Vanuatu</td>
                              <td>
                                 <a href="country-edit.php?id=234" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=234" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>235</td>
                              <td>Vatican City State</td>
                              <td>
                                 <a href="country-edit.php?id=235" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=235" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>236</td>
                              <td>Venezuela</td>
                              <td>
                                 <a href="country-edit.php?id=236" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=236" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>237</td>
                              <td>Vietnam</td>
                              <td>
                                 <a href="country-edit.php?id=237" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=237" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>238</td>
                              <td>Virgin Islands (British)</td>
                              <td>
                                 <a href="country-edit.php?id=238" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=238" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>239</td>
                              <td>Virgin Islands (U.S.)</td>
                              <td>
                                 <a href="country-edit.php?id=239" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=239" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>240</td>
                              <td>Wallis and Futuna Islands</td>
                              <td>
                                 <a href="country-edit.php?id=240" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=240" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>241</td>
                              <td>Western Sahara</td>
                              <td>
                                 <a href="country-edit.php?id=241" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=241" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>242</td>
                              <td>Yemen</td>
                              <td>
                                 <a href="country-edit.php?id=242" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=242" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>243</td>
                              <td>Zaire</td>
                              <td>
                                 <a href="country-edit.php?id=243" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=243" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>244</td>
                              <td>Zambia</td>
                              <td>
                                 <a href="country-edit.php?id=244" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=244" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>245</td>
                              <td>Zimbabwe</td>
                              <td>
                                 <a href="country-edit.php?id=245" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="country-delete.php?id=245" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
      </section>
      <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <div class="modal-body">
      Are you sure want to delete this item?
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      <a class="btn btn-danger btn-ok">Delete</a>
      </div>
      </div>
      </div>
      </div>
      </div>
	  <!-- end content -->


@endsection