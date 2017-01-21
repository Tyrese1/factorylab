<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Factory</title>

    <link href="css/app.css" rel="stylesheet" />
    <script src="js/app.js"></script>
    <!-- <link href="https://fonts.googleapis.com/css?family=Work+Sans:300" rel="stylesheet" /> -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.13/cr-1.3.2/r-2.1.0/sc-1.4.2/datatables.min.css" />

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.13/cr-1.3.2/r-2.1.0/sc-1.4.2/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#contributors').DataTable({
                columnDefs: [{
                    targets: [0],
                    orderData: [0, 1]
                }, {
                    targets: [1],
                    orderData: [1, 0]
                }, {
                    targets: [4],
                    orderData: [4, 0]
                }],
                "lengthMenu": [
                    [25, 50, 100, -1],
                    [25, 50, 100, "All"]
                ],
                "pageLength": 25,
                "scrollX": true
            });
        });
    </script>

    <style>
        .wrapper {
            display: flex;
            flex-flow: row wrap;
            justify-content: center;
            align-content: space-between;
            align-items: center;
            position: relative;
        }

        .head-links {
            flex: 1 100%;
            align-self: flex-start;
            padding: 20px;
        }

        .head-links a {
            color: #000;
            border: 0px solid #ddd;
            padding: 10px;
        }

        .head-links a:hover {
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            border: 0px;
            transition: 0.2s;
        }

        a,
        a:hover,
        a:active,
        a:visited {
            text-decoration: none;
            color: #a7a7a7;
        }

        .title,
        .desc,
        .a,
        body {
            font-family: 'Quicksand', sans-serif;
        }

        .title {
            font-size: 700%;
            margin-bottom: 10px;
        }

        .desc {
            font-size: 18pt;
            margin-bottom: 40px;
        }

        .form {
            margin-bottom: 20px;
        }

        h1 {
            font-size: 30px;
            color: #fff;
            text-transform: uppercase;
            font-weight: 300;
            text-align: center;
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            table-layout: fixed;
        }

        th {
            padding: 20px 15px;
            text-align: left;
            font-weight: 500;
            color: #000;
            text-transform: uppercase;
        }

        td {
            padding: 15px;
            text-align: left;
            vertical-align: middle;
            font-weight: 300;
            color: #000;
            border-bottom: solid 1px rgba(255, 255, 255, 0.1);
        }

        section {
            margin: 50px;
        }
    </style>
</head>

<body>
<div class="container-fluid wrapper">
    <div class="head-links">
        <a href="/">Home</a>
        <a href="about">About</a>
        <a href="/pricing">Pricing</a>
        <a href="/download">Download</a>
        <a href="/contact">Contact</a>
        <a href="/contributors">Contributors</a>
        <a href="/login">Login</a>
    </div>
    <div class="content">
        <div class="row">
            <div class="text-center title" style="font-size:3.5rem">{{$sitename}}</div>
            <div class="text-center desc col-md-8 col-md-push-2">
                <smaLL>Meet the contributors</smaLL>
            </div>

            <section>
                <!--for demo wrap-->
                <div class="tbl-header">
                    <table id="contributors" class="tablesorter table table-striped">
                        <thead>
                        <tr>
                            <th class="header">#</th>
                            <th class="header headerSortDown">Name</th>
                            <th class="header">Operating System</th>
                            <th class="header">Skill</th>
                            <th class="header headerSortDown">Slack Username</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td> Abiodun Adetona </td>
                            <td> Windows 10 </td>
                            <td> Html , CSS , PHP , Mysql </td>
                            <td> @abiodun_adetona </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Adeleye Adewale</td>
                            <td>Windows 10</td>
                            <td>HTML, CSS, PHP, C#</td>
                            <td>@adewagold</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Ademola Adebogun</td>
                            <td>Windows 10</td>
                            <td>PHP, ASP.net, JavaScript</td>
                            <td>@ademolaadebogun</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Adewale Adeoye</td>
                            <td>Windows 10</td>
                            <td>Full Stack ( PHP, MySql, HTML, CSS, JavaScript)</td>
                            <td>@adewaleadeoye</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Adewumi Adebayo</td>
                            <td>Ubuntu</td>
                            <td>Back-End (PHP, MySQL), HTML, CSS, Javascript</td>
                            <td>@adewumiadebayo</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Agboola Yusuf</td>
                            <td>Osx</td>
                            <td>Back-End (PHP, MySQL, Nodejs), HTML, CSS, Javascript</td>
                            <td>@olaar09</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Ajibola Oladubu</td>
                            <td>Windows 8</td>
                            <td>HTML and CSS and Javascript</td>
                            <td>@geeballer</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Ajiboye Eniola O.</td>
                            <td>Windows 10</td>
                            <td>Backend/Frontend, Backend(MeteorJs, mongoDB)</td>
                            <td>@ajiboyeeniola</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Akintola Olalekan</td>
                            <td>Windows 10</td>
                            <td> HTML, CSS, Javascript, Php</td>
                            <td>@akinlekan</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>AMOO Abeeb</td>
                            <td>Windows 10</td>
                            <td>HTML,CSS,Javascript(beginner),Android,PHP</td>
                            <td>@amooabeeb</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Andrew Wams</td>
                            <td>Windows 10</td>
                            <td>HTML, CSS, , Intermediate Level in PHP, NODEJS</td>
                            <td>@drewan</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Anthony Ugwu</td>
                            <td>Windows 10</td>
                            <td>HTML,CSS</td>
                            <td>@tony</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Anyim Amarachi</td>
                            <td>Widndows 10</td>
                            <td>HTML, CSS, PHP, </td>
                            <td>@amarachianyim</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Ashaolu Emmanuel</td>
                            <td>Windows 8</td>
                            <td>FrontEnd(HTML, CSS, JavaScript) PHP(Beginner), Android Programming(Intermediate),C++, C#</td>
                            <td>@simba</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Asuzu Chibuike</td>
                            <td>Windows 7</td>
                            <td>HTML, CSS, PHP</td>
                            <td>@asuzuchibuike</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Awojana Oluwafemi</td>
                            <td>Windows 8</td>
                            <td>Beginner</td>
                            <td>@cuenom</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>Awonusi Abraham</td>
                            <td>Windows 7</td>
                            <td>basic knowledge of HTML, CSS, Php</td>
                            <td>@awonusiabraham</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>Ayeni Akolade</td>
                            <td>Windows 7</td>
                            <td>Frontend(HTML, CSS) Backend(PHP, MySQL)</td>
                            <td>@akolade</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Ayo Alfonso</td>
                            <td>Windows 7</td>
                            <td>Coding(Node,Reactjs/Redux,MEAN,AngularJS,ECMAscript)</td>
                            <td>@ayoalfonso</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Ayobami Ogundiran</td>
                            <td>Windows 7</td>
                            <td>FrontEnd(HTML, CSS, Bootstrap, angularjs, jQuery, vanilla javaScritp, typeScript, phonegap), BackEnd(PHP,MySQL,Ubuntu), Regexp </td>
                            <td>@ayobami_ogundiran</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Ayodeji Ogundeji</td>
                            <td>Windows 8.1</td>
                            <td>Coding(using PHP, Javascript)</td>
                            <td>@ay0dej1</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>Benny Kelechi</td>
                            <td>Windows 7</td>
                            <td>Frontend/Backend</td>
                            <td>@Beeni</td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>Bolu Ajibawo</td>
                            <td>Windows 10</td>
                            <td>HTML, CSS, Javascript, PHP</td>
                            <td>@ajibs</td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td>Chi Etis</td>
                            <td></td>
                            <td>Back-End (PHP, MySQL), HTML, CSS, Java</td>
                            <td>@ceti</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>Chiamaka Obieri</td>
                            <td>Windows 8</td>
                            <td>Frontend, Backend</td>
                            <td>@chiamakaobieri</td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>Chibuike Osita</td>
                            <td>Ubuntu 16.0.4 (Linux)</td>
                            <td>
                                Backend(Php/Laravel, Nodejs, Django, MongoDb, Mysql, Sqlite), Frontend(AngularJs/Angular2, VueJs, Jquery)
                            </td>
                            <td>@mozartted</td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td>Chidi Okoye</td>
                            <td>Windows 8</td>
                            <td>frontend,Project Management</td>
                            <td>@okoyecb</td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td>Chiebuka edwin</td>
                            <td>ubuntu</td>
                            <td>Backend and mobile</td>
                            <td>@edwin</td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td>Chinedum Chiemela</td>
                            <td>Windows 10</td>
                            <td>Backend</td>
                            <td>@chiemela_chinedum</td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td>Chris James</td>
                            <td>Windows 8</td>
                            <td>Front End (HTML, CSS, JS)/Back End (PHP, MYSQL)</td>
                            <td>@chrismarcel</td>
                        </tr>
                        <tr>
                            <td>31</td>
                            <td>Christian Bassey</td>
                            <td>Linux Mint 17.2 Rafaeala</td>
                            <td>HTML, CSS, PHP beginner, Android beginner.</td>
                            <td>@chris_bassey</td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td>Chuks Festus</td>
                            <td>Windows 10, linux</td>
                            <td>fullstack javascript</td>
                            <td>@chuksFestus</td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td>Dave Kalu</td>
                            <td>Widndows 10</td>
                            <td>UX/UI</td>
                            <td>@ifydav</td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td>David Asiru</td>
                            <td>Windows 10</td>
                            <td>Front End and Backend</td>
                            <td>@reflective</td>
                        </tr>
                        <tr>
                            <td>35</td>
                            <td>David Inyang-Etoh</td>
                            <td>Windows 10</td>
                            <td>Full Stack</td>
                            <td>@dinyangetoh</td>
                        </tr>
                        <tr>
                            <td>36</td>
                            <td>Dike Thelma Kelechi</td>
                            <td>Windows 10</td>
                            <td>HTML,CSS,Bootstrap,python flask(beginner)</td>
                            <td>@matilbella</td>
                        </tr>
                        <tr>
                            <td>37</td>
                            <td>Dotun Jolaoso</td>
                            <td>Widndows 10</td>
                            <td>HTML, CSS, PHP, WordPress</td>
                            <td>@dotunjolaoso</td>
                        </tr>
                        <tr>
                            <td>38</td>
                            <td>Ebuka Ugwu</td>
                            <td>Ubuntu</td>
                            <td>Backend, Node, ReactJS</td>
                            <td>@ebuka_hills</td>
                        </tr>
                        <tr>
                            <td>39</td>
                            <td>Ekemam Chimezirim Victor</td>
                            <td>Windows 10</td>
                            <td>Full Stack</td>
                            <td>@mezez</td>
                        </tr>
                        <tr>
                            <td>40</td>
                            <td>Emehinola Idowu</td>
                            <td>Linux - Ubuntu 16.04</td>
                            <td>HTML, CSS, PHP</td>
                            <td>@emehinolaidowu</td>
                        </tr>
                        <tr>
                            <td>41</td>
                            <td>Emmanuel Odianosen</td>
                            <td>Windows 7/ Mac OsX</td>
                            <td>Back-End (PHP, MySQL), HTML, CSS, Javascript, Ruby On Rails, Writing</td>
                            <td>@emma_odia</td>
                        </tr>
                        <tr>
                            <td>42</td>
                            <td>Emmanuel Olaniyi</td>
                            <td>Windows 8.1</td>
                            <td>Frontend(HTML, CSS, Javascript) Backend(PHP, MySQL) Mobile Development (C#)</td>
                            <td>@tosyn</td>
                        </tr>
                        <tr>
                            <td>43</td>
                            <td>Emmanuel Raymond</td>
                            <td>Windows 10</td>
                            <td>Frontend, Backend</td>
                            <td>@peoray</td>
                        </tr>
                        <tr>
                            <td>44</td>
                            <td>Eniwoke Cornelius</td>
                            <td>Windows 8</td>
                            <td>Front-End, Mobile</td>
                            <td>@eniwokecornelius</td>
                        </tr>
                        <tr>
                            <td>45</td>
                            <td>Esther Itolima</td>
                            <td>Linux </td>
                            <td>FrontEnd</td>
                            <td>@esther.itolima</td>
                        </tr>
                        <tr>
                            <td>46</td>
                            <td>Ezeh Uche</td>
                            <td>Windows 10</td>
                            <td>Fullstack (ASP.Net, MSSQL, C#, Microsoft Bot Framework, HTML5, CSS3, Javascript)</td>
                            <td>@ezehuche</td>
                        </tr>
                        <tr>
                            <td>47</td>
                            <td>Fredd Adams</td>
                            <td>Windows 10</td>
                            <td>HTML, CSS, BoothStrap, Jquery, Wordpress, PHP(Beginner), UI/UX</td>
                            <td>@fredd</td>
                        </tr>
                        <tr>
                            <td>48</td>
                            <td>Friday Godswill</td>
                            <td>Windows 8</td>
                            <td>PHP, Python(Flask), HTML, CSS, JavaScript, Android, Hybrid Mobile apps</td>
                            <td>@fridayg</td>
                        </tr>
                        <tr>
                            <td>49</td>
                            <td>Gbenga Oyetade</td>
                            <td>Ubuntu 14</td>
                            <td>HTML, CSS, PHP</td>
                            <td>@gbenga_ps</td>
                        </tr>
                        <tr>
                            <td>50</td>
                            <td>Gideon Salami</td>
                            <td>Windows 8</td>
                            <td>HTML CSS(Beginner) PHP(Beginner)</td>
                            <td>@gs</td>
                        </tr>
                        <tr>
                            <td>51</td>
                            <td>Hamza Bashir</td>
                            <td>Windows 10</td>
                            <td>Javascript(jquerry, Node), Python(django), Frontend</td>
                            <td>@bamoha</td>
                        </tr>
                        <tr>
                            <td>52</td>
                            <td>Hector Johnson</td>
                            <td>Ubuntu</td>
                            <td>Front End</td>
                            <td>@hector101</td>
                        </tr>
                        <tr>
                            <td>53</td>
                            <td>Ifeanyi Osinakayah</td>
                            <td>Ubuntu</td>
                            <td>Web Development(Laravel, Bootstrap), Mobile Development(Ionic, Android)</td>
                            <td>@osinakayah</td>
                        </tr>
                        <tr>
                            <td>54</td>
                            <td>Ikemefuna Obioha</td>
                            <td>Windows 7</td>
                            <td>HTML, CSS, PHP and MySQL</td>
                            <td>@ikem_obioha</td>
                        </tr>
                        <tr>
                            <td>55</td>
                            <td>Ikemma Ifunanya</td>
                            <td>Windows 10</td>
                            <td>HTML, CSS, JavaScript</td>
                            <td>@ifunanya.ikemma</td>
                        </tr>
                        <tr>
                            <td>56</td>
                            <td>John Ugbor</td>
                            <td>Window 7</td>
                            <td>HTML, CSS, JAVA, JAVA(Android),PHP</td>
                            <td>@john_ugbor</td>
                        </tr>
                        <tr>
                            <td>57</td>
                            <td>Joseph Akinsanya</td>
                            <td>Mac OS X</td>
                            <td>HTML, CSS, PHP, MySQL</td>
                            <td>@josephakinsanya</td>
                        </tr>
                        <tr>
                            <td>58</td>
                            <td>Joseph Iwok</td>
                            <td>Windows</td>
                            <td>PHP, MySQL, JavaScript</td>
                            <td>@richwednesday</td>
                        </tr>
                        <tr>
                            <td>59</td>
                            <td>Kehinde Emmanuel</td>
                            <td>Ubuntu</td>
                            <td>Mobile (Android), Backend (PHP), Frontend (AngularJS)</td>
                            <td>@kehinde_emmanuel</td>
                        </tr>
                        <tr>
                            <td>60</td>
                            <td>Ladna Meke</td>
                            <td>Mac OSX</td>
                            <td>Javascript</td>
                            <td>@ladmerc</td>
                        </tr>
                        <tr>
                            <td>61</td>
                            <td>Lucky Ozoka</td>
                            <td>Linux (Ubuntu)</td>
                            <td>Backend &amp; Frontend</td>
                            <td>@orobolucky</td>
                        </tr>
                        <tr>
                            <td>62</td>
                            <td>Mary Mazi</td>
                            <td>Windows 8</td>
                            <td>Average Front-End (HTML, CSS) and Back-End (PHP, MySQL)</td>
                            <td>@mary.mazi</td>
                        </tr>
                        <tr>
                            <td>63</td>
                            <td>Mayomi Ayandiran</td>
                            <td>Ubuntu</td>
                            <td>PHP, python, MEAN</td>
                            <td>@mayomi_ayandiran</td>
                        </tr>
                        <tr>
                            <td>64</td>
                            <td>Micah Atoma</td>
                            <td>Windows 7</td>
                            <td>Front-end Developer (Html, Css, Jquery, Bootstrap, AngularJS)</td>
                            <td>@afriportal</td>
                        </tr>
                        <tr>
                            <td>65</td>
                            <td>Mustopha Rufai</td>
                            <td>Windows</td>
                            <td>Backend, Machine learning(Python)</td>
                            <td>@light_yagami</td>
                        </tr>
                        <tr>
                            <td>66</td>
                            <td>Nathaniel Makinde</td>
                            <td>Windows 8</td>
                            <td>HTML, CSS, Beginner in JavaScript</td>
                            <td>@nathaniel</td>
                        </tr>
                        <tr>
                            <td>67</td>
                            <td>Ndifreke Ekim</td>
                            <td>Windows 10</td>
                            <td>HTML/CSS, C++ Java</td>
                            <td>@nexkim</td>
                        </tr>
                        <tr>
                            <td>68</td>
                            <td>Ndubisi Ezekiel</td>
                            <td>Windows 10</td>
                            <td>Back-End (PHP, MySQL), HTML, CSS, Javascript, python</td>
                            <td>@iamezekiel</td>
                        </tr>
                        <tr>
                            <td>69</td>
                            <td>Nwanze Franklin</td>
                            <td>Windows 8</td>
                            <td>HTML, CSS, JAVASCRIPT, PHP, JAVA</td>
                            <td>@franko</td>
                        </tr>
                        <tr>
                            <td>70</td>
                            <td>Nwigboji Stanley</td>
                            <td>Windows 8</td>
                            <td>html, CSS, PHP, Javascript, java (intermediate) , Andriod (intermediate)</td>
                            <td>@xisco</td>
                        </tr>
                        <tr>
                            <td>71</td>
                            <td>Nwokike Judith Ifeoma</td>
                            <td>Windows 10</td>
                            <td>front End(HTML, CSS JAVASCRIPT, BOOTSTRAP)</td>
                            <td>@nwokikejudithifeoma</td>
                        </tr>
                        <tr>
                            <td>72</td>
                            <td>Obatarhe Otughwor</td>
                            <td>Windows 7</td>
                            <td>PHP, Python, Bootstrap, HTML, CSS, Android, Bash scripting</td>
                            <td>@otarhe</td>
                        </tr>
                        <tr>
                            <td>73</td>
                            <td>Obiegba Jonathan</td>
                            <td>Windows 10</td>
                            <td>HTML, CSS, PHP</td>
                            <td>@jonathanobiegba</td>
                        </tr>
                        <tr>
                            <td>74</td>
                            <td>Obodugo Rapheal</td>
                            <td>Windows 10</td>
                            <td>Backend and Frontend development</td>
                            <td>@obodugo</td>
                        </tr>
                        <tr>
                            <td>75</td>
                            <td>Oduola Olumide</td>
                            <td>Windows</td>
                            <td>Full Stack</td>
                            <td>@oduola.o.s</td>
                        </tr>
                        <tr>
                            <td>76</td>
                            <td>Offiong Aniekan</td>
                            <td>Windows 7</td>
                            <td>Frontend, Backend</td>
                            <td>@aniekanoffiong</td>
                        </tr>
                        <tr>
                            <td>77</td>
                            <td>Ogaba Samuel Ede</td>
                            <td>Windows 7</td>
                            <td>PHP, Java, Python</td>
                            <td>@elmage</td>
                        </tr>
                        <tr>
                            <td>78</td>
                            <td>Ogbonna Vitalis</td>
                            <td>Windows 10</td>
                            <td>Html,Css,Php,javaScritp,JAVA</td>
                            <td>@sage94</td>
                        </tr>
                        <tr>
                            <td>79</td>
                            <td>Ogunlana Tunbosun</td>
                            <td>Windows 8</td>
                            <td>Mobile(Android)/Desktop App Development, Python, PHP/MySQL</td>
                            <td>@olatunbosun</td>
                        </tr>
                        <tr>
                            <td>80</td>
                            <td>Okoko Michaels</td>
                            <td>Manjaro Linux</td>
                            <td>PHP, Javascript, Java (Android)</td>
                            <td>@pangolin</td>
                        </tr>
                        <tr>
                            <td>81</td>
                            <td>Okoye Nzube</td>
                            <td>Mac OS X</td>
                            <td>Full Stack, Mobile(Android), Python</td>
                            <td>@okoyenzube</td>
                        </tr>
                        <tr>
                            <td>82</td>
                            <td>Olakunle Dosunmu</td>
                            <td>Linux Mint</td>
                            <td>Html,Css, Javascript(Node), Php, MongoDb, MySql</td>
                            <td>@OlakunleDosunmu</td>
                        </tr>
                        <tr>
                            <td>83</td>
                            <td>Olaleke Timothy</td>
                            <td>Linux</td>
                            <td>Mobile (NativeScript), Backend (Python/Django), Frontend (Vue.JS), DB (MySQL/MongoDB), DevOps</td>
                            <td>@timtech4u</td>
                        </tr>
                        <tr>
                            <td>84</td>
                            <td>Olaoluwa Daramola</td>
                            <td>Windows 10</td>
                            <td>Backend, Motion and UI Design</td>
                            <td>@laolu</td>
                        </tr>
                        <tr>
                            <td>85</td>
                            <td>Olawale Ayodele</td>
                            <td>Windows 8.1 </td>
                            <td>HTML, CSS, Javascript, Wordpress, PHP, Git</td>
                            <td>@olawaleayodele</td>
                        </tr>
                        <tr>
                            <td>86</td>
                            <td>Olowosule Omotola</td>
                            <td>Windows 10</td>
                            <td>Frontend</td>
                            <td>@the_omotola</td>
                        </tr>
                        <tr>
                            <td>87</td>
                            <td> Oloyede Jamiu </td>
                            <td> Windows 8</td>
                            <td> FrontEnd &amp; BackEnd</td>
                            <td> @oloyedejamiu</td>
                        </tr>
                        <tr>
                            <td>88</td>
                            <td>Olubunmi Jegede</td>
                            <td>Windows</td>
                            <td>FrontEnd(HTML5, CSS3, Javascript, Bootstrap), BackEnd(PHP), Database(MySQL) </td>
                            <td>@olubunmijegede</td>
                        </tr>
                        <tr>
                            <td>89</td>
                            <td>Olude Adeogun</td>
                            <td>Widndows 10</td>
                            <td>HTML, PHP, Javascript, Java, MySQL</td>
                            <td>@olude_adeogun</td>
                        </tr>
                        <tr>
                            <td>90</td>
                            <td>Olumide Awofeso</td>
                            <td>Windows 10</td>
                            <td>Full Stack, Googling</td>
                            <td>@olumide</td>
                        </tr>
                        <tr>
                            <td>91</td>
                            <td>Oluwatobi Alaran</td>
                            <td>windows 7</td>
                            <td>PHP and MySQL</td>
                            <td>@abolibot</td>
                        </tr>
                        <tr>
                            <td>92</td>
                            <td>Omadoye Jedidiah</td>
                            <td>Windows 10</td>
                            <td>Frontend, Backend</td>
                            <td>@slim_Jed</td>
                        </tr>
                        <tr>
                            <td>93</td>
                            <td>Omotosho Ayobami</td>
                            <td>Windows 10</td>
                            <td>Frontend(HTML, CSS, Javascript) Backend(PHP(codeigniter), MySQL) </td>
                            <td>@ayobami303</td>
                        </tr>
                        <tr>
                            <td>94</td>
                            <td>Onyeka Ijeh</td>
                            <td>Windows</td>
                            <td>HTML, CSS, Javascript, PHP</td>
                            <td>@OnyekaIjeh</td>
                        </tr>
                        <tr>
                            <td>95</td>
                            <td>Opeyemi Orisatoberu</td>
                            <td>Windows </td>
                            <td>Frontend(Jquery,Javascrip,Angular) Backend(PHP,NodeJs )</td>
                            <td>@wiksiloh</td>
                        </tr>
                        <tr>
                            <td>96</td>
                            <td>Opia Chuks</td>
                            <td>Windows 7</td>
                            <td>Front End with basic(very very very basic) Back End knowledge </td>
                            <td>@troy34</td>
                        </tr>
                        <tr>
                            <td>97</td>
                            <td>Osayamen Osaretin</td>
                            <td>Os X</td>
                            <td> newb </td>
                            <td>@yamen</td>
                        </tr>
                        <tr>
                            <td>98</td>
                            <td>Paul Okoduwa</td>
                            <td>Widndows 7</td>
                            <td>beginner in mysql,HTML, CSS, PHP, </td>
                            <td>@paulokoduwa</td>
                        </tr>
                        <tr>
                            <td>99</td>
                            <td>Peter Olumolu</td>
                            <td>Windows 10</td>
                            <td>PHP, Django, PL/SQL, Oracle DB, MySql DB</td>
                            <td>@kraziegent</td>
                        </tr>
                        <tr>
                            <td>100</td>
                            <td>Praise Sunday</td>
                            <td>Windows 10</td>
                            <td>Frontend</td>
                            <td>@made4praise</td>
                        </tr>
                        <tr>
                            <td>101</td>
                            <td>Precious Eze</td>
                            <td>Windows 8</td>
                            <td>Fullstack</td>
                            <td>@preciouss</td>
                        </tr>
                        <tr>
                            <td>102</td>
                            <td>Rachael Iwelunmor</td>
                            <td>windows 8</td>
                            <td>frontend </td>
                            <td>rachaeliwelunmor</td>
                        </tr>
                        <tr>
                            <td>103</td>
                            <td>Regina Rex</td>
                            <td>Windows 10</td>
                            <td>Frontend and Backend</td>
                            <td>@reginarex</td>
                        </tr>
                        <tr>
                            <td>104</td>
                            <td>Rex Momoh</td>
                            <td>Windows 10</td>
                            <td>C#, Java, JavaScript, NodeJS, React, Android, MeteorJS, Socket.IO, VueJS, Aurelia, Xamarin, React Native, UWP</td>
                            <td>@juicycleff</td>
                        </tr>
                        <tr>
                            <td>105</td>
                            <td>Samuel Afolaranmi</td>
                            <td>Windows 10</td>
                            <td>HTML, CSS, Bootstrap, PHP, Ruby on Rails.</td>
                            <td>@sammysgame</td>
                        </tr>
                        <tr>
                            <td>106</td>
                            <td>Sarah Chima</td>
                            <td>Windows 10</td>
                            <td>FrontEnd (Javascript, Html, CSS)</td>
                            <td>@sarahchima</td>
                        </tr>
                        <tr>
                            <td>107</td>
                            <td>Seyi Onifade</td>
                            <td>Ubuntu</td>
                            <td>PHP</td>
                            <td>@xyluz</td>
                        </tr>
                        <tr>
                            <td>108</td>
                            <td>Shadrach Odekhiran</td>
                            <td>Windows 10</td>
                            <td>Backend (PHP AND PYTHON)</td>
                            <td>@shenky</td>
                        </tr>
                        <tr>
                            <td>109</td>
                            <td>Simisola Olatunji</td>
                            <td>Windows 10</td>
                            <td>HTML, CSS</td>
                            <td>@simi</td>
                        </tr>
                        <tr>
                            <td>110</td>
                            <td>Timothy Mayor</td>
                            <td>Windows 7</td>
                            <td>HTML, CSS, Javascript, Python, C#, Scala</td>
                            <td>@tmayor</td>
                        </tr>
                        <tr>
                            <td>111</td>
                            <td>Timothy Onyiuke</td>
                            <td>Windows 10</td>
                            <td>PHP &amp; MySQL, Python</td>
                            <td>@timothyonyiuke</td>
                        </tr>
                        <tr>
                            <td>112</td>
                            <td>Tobalase Akinyemi</td>
                            <td>Ubuntu GNU/Linux</td>
                            <td>Coding(using PHP, Node.js, Ruby) and GNU/Linux System Administration</td>
                            <td>@tobalase</td>
                        </tr>
                        <tr>
                            <td>113</td>
                            <td>Tonye Dickson</td>
                            <td>Windows 10</td>
                            <td>Front-End (HTML CSS, Google)</td>
                            <td>@tonye</td>
                        </tr>
                        <tr>
                            <td>114</td>
                            <td>Tosin Akinbobola</td>
                            <td>Ubuntu Linux</td>
                            <td>Fullstack</td>
                            <td>@precioustosin</td>
                        </tr>
                        <tr>
                            <td>115</td>
                            <td>Tunmbi Banto</td>
                            <td>Mac OS X</td>
                            <td>HTML, CSS, PHP, MySQL</td>
                            <td>@hellotunmbi</td>
                        </tr>
                        <tr>
                            <td>116</td>
                            <td>Udenkwor Promise</td>
                            <td>Windows 10</td>
                            <td>UX, HTML, CSS, JAVASCRIPT, Beginner in PHP, NODEJS</td>
                            <td>@promhize</td>
                        </tr>
                        <tr>
                            <td>117</td>
                            <td>Umar Abdullahi</td>
                            <td>Windows</td>
                            <td>Backend(PHP &amp; MySQL,Node.js &amp; MongoDB)</td>
                            <td>@codebyomar</td>
                        </tr>
                        <tr>
                            <td>118</td>
                            <td>Usen Joshua Osakpamwan</td>
                            <td>Windows 10</td>
                            <td>Beginner</td>
                            <td>@joshua_usen</td>
                        </tr>
                        <tr>
                            <td>119</td>
                            <td>Valentine Oleka</td>
                            <td>Ubuntu 16.04 LTS</td>
                            <td>Average Front-End, LAMP Stack, Project Management</td>
                            <td>@valentine_oleka</td>
                        </tr>
                        <tr>
                            <td>120</td>
                            <td>Vanessa Osuka</td>
                            <td>Windows 10</td>
                            <td>Backend</td>
                            <td>@vanessa</td>
                        </tr>
                        <tr>
                            <td>121</td>
                            <td>Victor Alagwu</td>
                            <td>Windows 10</td>
                            <td>HTML, CSS, Javascript, PHP</td>
                            <td>@victor</td>
                        </tr>
                        <tr>
                            <td>122</td>
                            <td>Victor Bala</td>
                            <td>Windows</td>
                            <td>HTML5, CSS3, Javascript, PHP</td>
                            <td>@savics</td>
                        </tr>
                        <tr>
                            <td>123</td>
                            <td>Zainab Ayodimeji</td>
                            <td>Windows 8</td>
                            <td>Newbie, basic knowledge of HTML and CSS</td>
                            <td>@zizzycarter</td>
                        </tr>
                        <tr>
                            <td>124</td>
                            <td>Mikairu Blessing</td>
                            <td>Windows 10</td>
                            <td>Basic Python,Beginner in Everything Else</td>
                            <td>@mikairu_blessing</td>
                        </tr>
                        <tr>
                            <td>125</td>
                            <td>Mfoniso Umana</td>
                            <td>Windows 10, Linux</td>
                            <td>Php (Intermediate), python, frontend</td>
                            <td>@kinging8</td>
                        </tr>
                        <tr>
                            <td>126</td>
                            <td>Adegor Emmanuel</td>
                            <td>Windows 8</td>
                            <td>Php, MySql, Frontend</td>
                            <td>@emmanueladegor</td>
                        </tr>
                        <tr>
                            <td>127</td>
                            <td>Izuchukwu Obi</td>
                            <td>Windows 8.1</td>
                            <td>HTML, Python</td>
                            <td>@izuchukwuobi</td>
                        </tr>
                        <tr>
                            <td>128</td>
                            <td> Stephen Gabriel </td>
                            <td> Windows 10, Linux(Mint)</td>
                            <td> Front end, PHP, MYsql, Python, Java </td>
                            <td> @cyberdroidmann</td>
                        </tr>
                        <tr>
                            <td>129</td>
                            <td>Babangida Bello</td>
                            <td>Windows 10</td>
                            <td>HTML, CSS, JavaScript, jQuery, PHP and MySQL</td>
                            <td>@kauranamoda</td>
                        </tr>
                        <tr>
                            <td>130</td>
                            <td>Khalifa Lame</td>
                            <td>Windows 10</td>
                            <td>Python, Django, Blender3D, Unity Game Engine, HTML/CSS/JS, ReactJS, C#, Java, jQuery, Bootstrap, Materialize, Krita, SQL</td>
                            <td>@khalibloo</td>
                        </tr>
                        <tr>
                            <td>131</td>
                            <td>Adetuyi Tolu</td>
                            <td>Windows 10</td>
                            <td>HTML, CSS, PHP, Javascript, MySql, Java and Android dev.</td>
                            <td>@toluadetuyi</td>
                        </tr>
                        <tr>
                            <td>132</td>
                            <td>Tunji Ayoola</td>
                            <td>Windows 10</td>
                            <td>HTML, CSS, Javascript, PHP</td>
                            <td>@tunjiayoola</td>
                        </tr>
                        <tr>
                            <td>133</td>
                            <td>Awonusi Abraham</td>
                            <td>Windows 7</td>
                            <td>HTML, CSS, Javascript, PHP</td>
                            <td>@awonusiabraham</td>
                        </tr>
                        <tr>
                            <td>134</td>
                            <td>Usoro Ofonime</td>
                            <td>Windows 8.1, Ubuntu</td>
                            <td>HTML, CSS, PHP, Python, Java</td>
                            <td>@ofonime_usoro</td>
                        </tr>
                        <tr>
                            <td>135</td>
                            <td>Adetuyi Tolu</td>
                            <td>Windows 10</td>
                            <td>HTML, CSS, PHP, Javascript, MySql, Java and Android dev.</td>
                            <td>@toluadetuyi</td>
                        </tr>
                        <tr>
                            <td>136</td>
                            <td>Ayodeji Ige</td>
                            <td>Windows 10</td>
                            <td>HTML, CSS, Javascript, Python, C++</td>
                            <td>@dj</td>
                        </tr>
                        <tr>
                            <td>137</td>
                            <td>Oluwafemi Akinwa</td>
                            <td>Ubuntu 16.04 LTS</td>
                            <td>HTML5, CSS3, Javascript, Python, Angular, Java</td>
                            <td>@kaiser.phemi</td>
                        </tr>
                        <tr>
                            <td>138</td>
                            <td>Cyril James</td>
                            <td>Windows 8</td>
                            <td>HTML5, CSS3, Python, PHP</td>
                            <td>@fluxy</td>
                        </tr>
                        <tr>
                            <td>139</td>
                            <td>Oje Amicki</td>
                            <td>Windows 10</td>
                            <td>HTML5, CSS3, PHP, MySQL</td>
                            <td>@Christmas</td>
                        </tr>
                        <tr>
                            <td>140</td>
                            <td>Suleiman Bashiru</td>
                            <td>Windows 7</td>
                            <td>HTML5, CSS3, Javascript, Bootstrap</td>
                            <td>@suleimanbashiru</td>
                        </tr>
                        <tr>
                            <td>141</td>
                            <td>Ijeomah Arinze</td>
                            <td>Windows 8</td>
                            <td>HTML5, CSS3, PHP, MySQL, JAVASCRIPT</td>
                            <td>@shine</td>
                        </tr>
                        <tr>
                            <td>142</td>
                            <td>Kelechi Ogueji</td>
                            <td>Windows 8</td>
                            <td>Android Application Development, JAVA</td>
                            <td>@kelechiogueji</td>
                          </tr>
                        <tr>
                            <td>143</td>
                            <td>Prosper Oyibo</td>
                            <td>Windows 10</td>
                            <td>Javascript, Python, PHP</td>
                            <td>@prosper_oyibo</td>
                        </tr>
                        <tr>
                            <td>144</td>
                            <td>Adewunmi Simon</td>
                            <td>Mac Os</td>
                            <td>Kotlin,Android Dev, JAVA</td>
                            <td>@dewunmisimon</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>

</div>
</body>

</html>