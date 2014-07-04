/*
   Deluxe Menu Data File
   Created by Deluxe Tuner v2.4
   http://deluxe-menu.com
*/


// -- Deluxe Tuner Style Names
var tstylesNames=[];
var tXPStylesNames=[];
// -- End of Deluxe Tuner Style Names

//--- Common
var tlevelDX=10;
var texpanded=0;
var texpandItemClick=0;
var tcloseExpanded=0;
var tcloseExpandedXP=0;
var ttoggleMode=1;
var tnoWrap=1;
var titemTarget="_self";
var titemCursor="pointer";
var statusString="link";
var tblankImage="menu.files/blank.gif";
var tpathPrefix_img="";
var tpathPrefix_link="";

//--- Dimensions
var tmenuWidth="";
var tmenuHeight="auto";

//--- Positioning
var tabsolute=0;
var tleft="0px";
var ttop="0px";

//--- Font
var tfontStyle="normal 8pt Tahoma";
var tfontColor=["#000000","#000000"];
var tfontDecoration=["none","underline"];
var tfontColorDisabled="#AAAAAA";
var tpressedFontColor="#AA0000";

//--- Appearance
var tmenuBackColor="#FFFFFF";
var tmenuBackImage="menu.files/blank.gif";
var tmenuBorderColor="";
var tmenuBorderWidth=0;
var tmenuBorderStyle="none";

//--- Item Appearance
var titemAlign="left";
var titemHeight=18;
var titemBackColor=["#ffffff","#D5E8FF"];
var titemBackImage=["menu.files/blank.gif","menu.files/blank.gif"];

//--- Icons & Buttons
var ticonWidth=16;
var ticonHeight=16;
var ticonAlign="left";
var texpandBtn=["menu.files/expand.gif","menu.files/expand.gif","menu.files/collapse.gif"];
var texpandBtnW=8;
var texpandBtnH=8;
var texpandBtnAlign="left";

//--- Lines
var tpoints=1;
var tpointsImage="";
var tpointsVImage="";
var tpointsCImage="";

//--- Floatable Menu
var tfloatable=1;
var tfloatIterations=6;
var tfloatableX=1;
var tfloatableY=1;

//--- Movable Menu
var tmoveable=0;
var tmoveHeight=12;
var tmoveColor="#AA0000";
var tmoveImage="";

//--- XP-Style
var tXPStyle=1;
var tXPIterations=5;
var tXPBorderWidth=0;
var tXPBorderColor="#AFAFAF";
var tXPTitleBackColor="";
var tXPTitleBackImg="menu.files/blank.gif";
var tXPTitleLeft="menu.files/blank.gif";
var tXPTitleLeftWidth=16;
var tXPIconWidth=16;
var tXPIconHeight=16;
var tXPExpandBtn=["menu.files/blank.gif","menu.files/blank.gif","menu.files/blank.gif","menu.files/blank.gif"];
var tXPBtnWidth=16;
var tXPBtnHeight=16;
var tXPFilter=1;

//--- Dynamic Menu
var tdynamic=0;

//--- State Saving
var tsaveState=1;
var tsavePrefix="menu1";


var tmenuItems = [

    ["Programas Ime","", "", "", "", "XP Title Tip", "", "", "", ],
        ["|mostrar Programas","C:/wamp/www/IME_Programas/programasime.php", "", "", "", "Home Page Tip", "", "", "", ],
        ["|Cargar Programas","", "", "", "", "Product Info Tip", "", "", "", ],
            ["||C.E.I.","C:/wamp/www/IME_Programas/formcei.php", "", "", "", "", "", "", "", ],
            ["||Features","testlink.htm", "", "", "", "", "", "", "", ],
            ["||Installation","testlink.htm", "", "", "", "", "", "", "", ],
            ["||Functions","testlink.htm", "", "", "", "", "", "", "", ],
            ["||Supported Browsers","testlink.htm", "", "", "", "", "", "", "", ],
];

dtree_init();