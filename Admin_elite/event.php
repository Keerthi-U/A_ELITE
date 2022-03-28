<?php
include_once('header.php');
?>
<!-- Latest compiled and minified CSS -->



 <style>
        .table-containerr {
            width: 100%;
            padding: 31px;
        }
            table {
        border-spacing: 0 0.85rem !important;
        }

        .table .dropdown {
        display: inline-block;
        }

        .table td,
        .table th {
        vertical-align: middle;
        margin-bottom: 10px;
        border: none;
        }

        .table thead tr,
        .table thead th {
        border: none;
        font-size: 12px;
        letter-spacing: 1px;
        color: #933ec5;
        text-transform: uppercase;
        background: transparent;
        }

        .table td {
        background: #fff;
        }
        .table th {
        background: #fff;
        }
        .table td:first-child {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        }

        .table td:last-child {
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        }

        .avatar {
        width: 2.75rem;
        height: 2.75rem;
        line-height: 3rem;
        border-radius: 50%;
        display: inline-block;
        background: transparent;
        position: relative;
        text-align: center;
        color: #868e96;
        font-weight: 700;
        vertical-align: bottom;
        font-size: 1rem;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        }

        .avatar-sm {
        width: 2.5rem;
        height: 2.5rem;
        font-size: 0.83333rem;
        line-height: 1.5;
        }

        .avatar-img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        }

        .avatar-blue {
        background-color: #c8d9f1;
        color: #467fcf;
        }

        table.dataTable.dtr-inline.collapsed
        > tbody
        > tr[role="row"]
        > td:first-child:before,
        table.dataTable.dtr-inline.collapsed
        > tbody
        > tr[role="row"]
        > th:first-child:before {
        top: 28px;
        left: 14px;
        border: none;
        box-shadow: none;
        }

        table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > td:first-child,
        table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > th:first-child {
        padding-left: 48px;
        }

        table.dataTable > tbody > tr.child ul.dtr-details {
        width: 100%;
        }

        table.dataTable > tbody > tr.child span.dtr-title {
        min-width: 50%;
        }

        table.dataTable.dtr-inline.collapsed > tbody > tr > td.child,
        table.dataTable.dtr-inline.collapsed > tbody > tr > th.child,
        table.dataTable.dtr-inline.collapsed > tbody > tr > td.dataTables_empty {
        padding: 0.75rem 1rem 0.125rem;
        }

        div.dataTables_wrapper div.dataTables_length label,
        div.dataTables_wrapper div.dataTables_filter label {
        margin-bottom: 0;
        }

        @media (max-width: 767px) {
        div.dataTables_wrapper div.dataTables_paginate ul.pagination {
            -ms-flex-pack: center !important;
            justify-content: center !important;
            margin-top: 1rem;
        }
        }

        .btn-icon {
        background: #fff;
        }
        .btn-icon .bx {
        font-size: 20px;
        }

        .btn .bx {
        vertical-align: middle;
        font-size: 20px;
        }

        .dropdown-menu {
        padding: 0.25rem 0;
        }

        .dropdown-item {
        padding: 0.5rem 1rem;
        }

        .badge {
        padding: 0.5em 0.75em;
        }

        .badge-success-alt {
        background-color: #d7f2c2;
        color: #7bd235;
        }

        .table a {
        color: #212529;
        }

        .table a:hover,
        .table a:focus {
        text-decoration: none;
        }

        table.dataTable {
        margin-top: 12px !important;
        }

        .icon > .bx {
        display: block;
        min-width: 1.5em;
        min-height: 1.5em;
        text-align: center;
        font-size: 1.0625rem;
        }

        .btn {
        font-size: 0.9375rem;
        font-weight: 500;
        padding: 0.5rem 0.75rem;
        }

        .avatar-blue {
         background-color: #c8d9f1;
         color: #467fcf;
        }

        .avatar-pink {
         background-color: #fcd3e1;
         color: #f66d9b;
         }
        table {
        border-collapse:separate; 
        border-spacing: 0 1em;
        }
        tr{
        border-top: none!important;
        }
        table td , th {
        border-top: none !important;
        }
     </style>

    <!-- End Left menu area -->
    <!-- Start Welcome area -->
     <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-containerr">
          <table class="table table-striped" >
            <caption>Bootstrap 3 Table - SPLessons.com</caption>
            <thead>
                <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                </tr>
            </thead>
            <tbody >
                <tr>
                <th scope="row">1</th>
                <td>Sreehari</td>
                <td>Inukollu</td>
                <td>@isreehari</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Sam</td>
                <td>Sundhar</td>
                <td>@ssundhar</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Venkat</td>
                <td>Gajendhra</td>
                <td>@venkatg</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Venkat</td>
                <td>Gajendhra</td>
                <td>@venkatg</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Venkat</td>
                <td>Gajendhra</td>
                <td>@venkatg</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Venkat</td>
                <td>Gajendhra</td>
                <td>@venkatg</td>
                </tr>
        
            </tbody>
            </table>
         </div>
       </div>
        <?php
        include_once('footer.php');
        ?>