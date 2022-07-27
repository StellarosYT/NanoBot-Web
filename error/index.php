<?php
	if(http_response_code() == 200){
		http_response_code(404);
	}
?>
<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo http_response_code(); ?> | PRYOXIS ENTERTAINMENT</title>
	
	<link rel="stylesheet" href="./assets/bd5d08ad186f34d9.css" data-n-g="">
	<link rel="stylesheet" href="./assets/0d218077c67b9c6a.css" data-n-p="">
	<style data-href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700,800|Fira+Sans:400,600|Lora:400,400i,700|Indie+Flower|Roboto:400,700">@font-face{font-family:'Fira Sans';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/firasans/v16/va9E4kDNxMZdWfMOD5Vvl4jN.woff) format('woff')}@font-face{font-family:'Fira Sans';font-style:normal;font-weight:600;src:url(https://fonts.gstatic.com/s/firasans/v16/va9B4kDNxMZdWfMOD5VnSKzeRhf8.woff) format('woff')}@font-face{font-family:'Indie Flower';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/indieflower/v17/m8JVjfNVeKWVnh3QMuKkFcZVaUuB.woff) format('woff')}@font-face{font-family:'Lora';font-style:italic;font-weight:400;src:url(https://fonts.gstatic.com/s/lora/v24/0QI8MX1D_JOuMw_hLdO6T2wV9KnW-MoFoq92mg.woff) format('woff')}@font-face{font-family:'Lora';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/lora/v24/0QI6MX1D_JOuGQbT0gvTJPa787weuxJBkqs.woff) format('woff')}@font-face{font-family:'Lora';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/lora/v24/0QI6MX1D_JOuGQbT0gvTJPa787z5vBJBkqs.woff) format('woff')}@font-face{font-family:'Montserrat';font-style:italic;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq6R9WXh0oA.woff) format('woff')}@font-face{font-family:'Montserrat';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Hw5aXw.woff) format('woff')}@font-face{font-family:'Montserrat';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw5aXw.woff) format('woff')}@font-face{font-family:'Montserrat';font-style:normal;font-weight:500;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw5aXw.woff) format('woff')}@font-face{font-family:'Montserrat';font-style:normal;font-weight:600;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w5aXw.woff) format('woff')}@font-face{font-family:'Montserrat';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w5aXw.woff) format('woff')}@font-face{font-family:'Montserrat';font-style:normal;font-weight:800;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvr73w5aXw.woff) format('woff')}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu4mxM.woff) format('woff')}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfBBc-.woff) format('woff')}@font-face{font-family:'Fira Sans';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/firasans/v16/va9E4kDNxMZdWfMOD5VvmojLazX3dGTP.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Fira Sans';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/firasans/v16/va9E4kDNxMZdWfMOD5Vvk4jLazX3dGTP.woff2) format('woff2');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Fira Sans';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/firasans/v16/va9E4kDNxMZdWfMOD5Vvm4jLazX3dGTP.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Fira Sans';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/firasans/v16/va9E4kDNxMZdWfMOD5VvlIjLazX3dGTP.woff2) format('woff2');unicode-range:U+0370-03FF}@font-face{font-family:'Fira Sans';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/firasans/v16/va9E4kDNxMZdWfMOD5VvmIjLazX3dGTP.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Fira Sans';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/firasans/v16/va9E4kDNxMZdWfMOD5VvmYjLazX3dGTP.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Fira Sans';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/firasans/v16/va9E4kDNxMZdWfMOD5Vvl4jLazX3dA.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Fira Sans';font-style:normal;font-weight:600;src:url(https://fonts.gstatic.com/s/firasans/v16/va9B4kDNxMZdWfMOD5VnSKzeSxf6Xl7Gl3LX.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Fira Sans';font-style:normal;font-weight:600;src:url(https://fonts.gstatic.com/s/firasans/v16/va9B4kDNxMZdWfMOD5VnSKzeQhf6Xl7Gl3LX.woff2) format('woff2');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Fira Sans';font-style:normal;font-weight:600;src:url(https://fonts.gstatic.com/s/firasans/v16/va9B4kDNxMZdWfMOD5VnSKzeShf6Xl7Gl3LX.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Fira Sans';font-style:normal;font-weight:600;src:url(https://fonts.gstatic.com/s/firasans/v16/va9B4kDNxMZdWfMOD5VnSKzeRRf6Xl7Gl3LX.woff2) format('woff2');unicode-range:U+0370-03FF}@font-face{font-family:'Fira Sans';font-style:normal;font-weight:600;src:url(https://fonts.gstatic.com/s/firasans/v16/va9B4kDNxMZdWfMOD5VnSKzeSRf6Xl7Gl3LX.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Fira Sans';font-style:normal;font-weight:600;src:url(https://fonts.gstatic.com/s/firasans/v16/va9B4kDNxMZdWfMOD5VnSKzeSBf6Xl7Gl3LX.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Fira Sans';font-style:normal;font-weight:600;src:url(https://fonts.gstatic.com/s/firasans/v16/va9B4kDNxMZdWfMOD5VnSKzeRhf6Xl7Glw.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Indie Flower';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/indieflower/v17/m8JVjfNVeKWVnh3QMuKkFcZVaUuH99GUDg.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Lora';font-style:italic;font-weight:400;src:url(https://fonts.gstatic.com/s/lora/v24/0QI8MX1D_JOuMw_hLdO6T2wV9KnW-MoFoqJ2mvWc3ZyhTjcV.woff) format('woff');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Lora';font-style:italic;font-weight:400;src:url(https://fonts.gstatic.com/s/lora/v24/0QI8MX1D_JOuMw_hLdO6T2wV9KnW-MoFoqt2mvWc3ZyhTjcV.woff) format('woff');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Lora';font-style:italic;font-weight:400;src:url(https://fonts.gstatic.com/s/lora/v24/0QI8MX1D_JOuMw_hLdO6T2wV9KnW-MoFoqB2mvWc3ZyhTjcV.woff) format('woff');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Lora';font-style:italic;font-weight:400;src:url(https://fonts.gstatic.com/s/lora/v24/0QI8MX1D_JOuMw_hLdO6T2wV9KnW-MoFoqF2mvWc3ZyhTjcV.woff) format('woff');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Lora';font-style:italic;font-weight:400;src:url(https://fonts.gstatic.com/s/lora/v24/0QI8MX1D_JOuMw_hLdO6T2wV9KnW-MoFoq92mvWc3ZyhTg.woff) format('woff');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Lora';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/lora/v24/0QIvMX1D_JOuMwf7I_FMl_GW8g.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Lora';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/lora/v24/0QIvMX1D_JOuMw77I_FMl_GW8g.woff2) format('woff2');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Lora';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/lora/v24/0QIvMX1D_JOuMwX7I_FMl_GW8g.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Lora';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/lora/v24/0QIvMX1D_JOuMwT7I_FMl_GW8g.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Lora';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/lora/v24/0QIvMX1D_JOuMwr7I_FMl_E.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Lora';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/lora/v24/0QIvMX1D_JOuMwf7I_FMl_GW8g.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Lora';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/lora/v24/0QIvMX1D_JOuMw77I_FMl_GW8g.woff2) format('woff2');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Lora';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/lora/v24/0QIvMX1D_JOuMwX7I_FMl_GW8g.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Lora';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/lora/v24/0QIvMX1D_JOuMwT7I_FMl_GW8g.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Lora';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/lora/v24/0QIvMX1D_JOuMwr7I_FMl_E.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Montserrat';font-style:italic;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq6R9WXV0oJC8MLnbtrVK.woff) format('woff');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Montserrat';font-style:italic;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq6R9WXx0oJC8MLnbtrVK.woff) format('woff');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Montserrat';font-style:italic;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq6R9WXd0oJC8MLnbtrVK.woff) format('woff');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Montserrat';font-style:italic;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq6R9WXZ0oJC8MLnbtrVK.woff) format('woff');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Montserrat';font-style:italic;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq6R9WXh0oJC8MLnbtg.woff) format('woff');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Montserrat';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WRhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Montserrat';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459W1hyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Montserrat';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WZhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Montserrat';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WdhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Montserrat';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WlhyyTh89Y.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Montserrat';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WRhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Montserrat';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459W1hyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Montserrat';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WZhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Montserrat';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WdhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Montserrat';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WlhyyTh89Y.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Montserrat';font-style:normal;font-weight:500;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WRhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Montserrat';font-style:normal;font-weight:500;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459W1hyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Montserrat';font-style:normal;font-weight:500;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WZhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Montserrat';font-style:normal;font-weight:500;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WdhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Montserrat';font-style:normal;font-weight:500;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WlhyyTh89Y.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Montserrat';font-style:normal;font-weight:600;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WRhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Montserrat';font-style:normal;font-weight:600;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459W1hyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Montserrat';font-style:normal;font-weight:600;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WZhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Montserrat';font-style:normal;font-weight:600;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WdhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Montserrat';font-style:normal;font-weight:600;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WlhyyTh89Y.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Montserrat';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WRhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Montserrat';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459W1hyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Montserrat';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WZhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Montserrat';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WdhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Montserrat';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WlhyyTh89Y.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Montserrat';font-style:normal;font-weight:800;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WRhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Montserrat';font-style:normal;font-weight:800;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459W1hyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Montserrat';font-style:normal;font-weight:800;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WZhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Montserrat';font-style:normal;font-weight:800;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WdhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Montserrat';font-style:normal;font-weight:800;src:url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WlhyyTh89Y.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu72xKKTU1Kvnz.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu5mxKKTU1Kvnz.woff2) format('woff2');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu7mxKKTU1Kvnz.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu4WxKKTU1Kvnz.woff2) format('woff2');unicode-range:U+0370-03FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu7WxKKTU1Kvnz.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu7GxKKTU1Kvnz.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu4mxKKTU1Kg.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfCRc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfABc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfCBc4AMP6lbBP.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfBxc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0370-03FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfCxc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfChc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfBBc4AMP6lQ.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}</style>
</head>
	
<body>
	<div id="__next" data-reactroot="">
	<div class="__404_error404__fY7mk">
	<div class="__404_content___y9Ei">
	<h1><?php echo http_response_code(); ?></h1>
	<p>Une erreur s'est produite<!-- -->.<!-- --> <a class="__404_link__G1nvY" href="javascript:history.back()">Retourner à la dernière page</a>.</p>
	</div></div></div>
</body>

</html>
<?php
?>