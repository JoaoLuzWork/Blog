let cond = 0;

function menuChange() 
{
    if (cond == 0) 
    {
        document.getElementById('menu_Img').src='svg/menuBack.svg';
        document.getElementById('menuBox').style='transform: translate(0px);'
        cond++; 
    } else if(cond != 0)
    {
        document.getElementById('menu_Img').src='svg/menuBar.svg';
        document.getElementById('menuBox').style='transform: translate(500px);'
        cond--;
    }  
}