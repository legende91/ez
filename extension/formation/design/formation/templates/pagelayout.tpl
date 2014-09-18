<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <style type="text/css">
            @import url({"stylesheets/style.css"|ezdesign});
            @import url({"stylesheets/styles.css"|ezdesign});
        </style>
        {include uri='design:page_head.tpl'}
    </head>
    <body>


        <table class="layout" width="100%" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td colspan="2">

                    {* Toolbar START *}

                    {include uri="design:page_toptoolbar.tpl"}

                    {* Toolbar END *}

                </td>

            </tr>
        </table>
        <table class="layout" width="100%" cellpadding="0" cellspacing="0" border="0">
            <tr>
            <td colspan="2"> {include uri="design:includes/header.tpl"}</td>
            </tr>
        </table>




        {$module_result.content}
        <!--DEBUG_REPORT-->

    </body>
</html>
