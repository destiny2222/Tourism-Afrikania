<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AHTES24</title>
    <style>
        * {
            font-family: sans-serif;
        }

        body {
            font-family: sans-serif;
            font-style: normal;
            font-weight: normal;
            line-height: 15px;
            color: #828282;
            background-color: #F2F2F2;
        }

        .logo {
            border: 0.5px solid #BDBDBD;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: #F2F2F2;
            table-layout: fixed;
            padding: 20px;

        }

        .wrapper-inner {
            background-color: #fff;
            max-width: 670px;
            Margin: 0 auto;
            padding: 15px;
            border-collapse: collapse;
            table-layout: fixed;
            word-break: break-word;
            width: 476px;
        }

        table {
            border-spacing: 0;
            font-family: sans-serif;
            color: #727f80;
        }



        .primary {
            color: #6450EF;
        }

        .success {
            color: #008000;
        }

        .danger {
            color: #ff0000;
        }

        .fw-bold {
            font-weight: bold;
        }

        .table-footer {
            text-align: center;
        }

        .table-footer p {
            line-height: 11px;
        }


        /*--- End Outer Table 1 --*/
        .main-table-first {
            width: 100%;
            max-width: 610px;
            Margin: 0 auto;
        }

        /*--- Start Two Column Sections --*/
        .two-column {
            font-size: 0;
            padding: 5px 0 10px 0;
        }

        .two-column .section {
            width: 100%;
            max-width: 240px;
            ;
            display: inline-block;
            vertical-align: top;
        }

        .two-column .content-inner {
            font-size: 16px;
            line-height: 20px;
            text-align: justify;
        }

        .content-inner {
            width: 100%;
        }

        img {
            border: 0;
        }

        .layout div {
            padding-top: 0.1rem;
            text-align: left;
            vertical-align: top;
            color: #60666d;
            font-size: 15px;
            line-height: 21px;
            font-family: sans-serif;
            font-weight: 400;
            width: 476px;
        }

        a {
            padding-top: 150px;
        }

        /*--- Media Queries --*/
        @media screen and (max-width:768px) {

            .two-column .section-inner {
                width: 100% !important;
                max-width: 100% !important;
                display: inline-block;
                vertical-align: top;
            }

        }

        @media screen and (max-width: 400px) {
            .h1 {
                font-size: 22px;
            }

            .two-column .column {
                max-width: 100% !important;
            }

        }

        @media screen and (min-width: 401px) and (max-width: 400px) {

            .two-column .column {
                max-width: 50% !important;
            }


        }
    </style>
</head>

<body>
    <div class="container">
        <div class="wrapper-inner">
            <table>
                <tr>
                    <td style="padding-top: 1.5rem; color: #13161D; font-size: 15px;line-height:50px;">
                        <div style="font-weight: bold;">WELCOME TO AHTES24</div>
                    </td>
                </tr>
                <tr>
                    <td class="layout">
                        <div>Your registration has been successfully submited.</div>
                        <div>We look forward to receiving you in person at the conference.</div>
                        <div>
                            Create your AHTES DP now ⤵ 
                            @if ($ahtes->register_as == 'REGULAR DELEGATE')
                                <a href="https://getdp.co/ahtes2024regdelegate">Click here</a>
                            @elseif ($ahtes->register_as == 'DELEGATE')
                                <a href="https://getdp.co/ahtes2024delegate">Click here</a>
                            @elseif ($ahtes->register_as == 'PREMIUM DELEGATE')
                                <a href="https://getdp.co/ahtes2024predelegate">Click here</a>
                            @elseif ($ahtes->register_as == 'visitor')
                                <a href="https://getdp.co/ahtes2024visitors">Click here</a>
                            @endif
                        </div>    
                    </td>
                </tr>
                {{-- <tr>
                    <td>
                        <table width="100%" style="border-spacing: 0;">
                            <tr>
                                <td class="layout">
                                    <div class="layout-div" style="padding-bottom:7px;">If you have any questions, feel free to reach out
                                        to us.</div> 
                                    <a href="mailto:ahtes@tourismafrikanianig.com">ahtes@tourismafrikanianig.com</a>
                                    <a href="mailto:info@tourismafrikanianig.com">info@tourismafrikanianig.com</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr> --}}
            </table><!-- main section end -->
        </div>
    </div>
</body>

</html>