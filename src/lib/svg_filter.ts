export default `
<svg xmlns='http://www.w3.org/2000/svg' width='500' height='700'>
    <filter id='n' x='0' y='0'>
        <feTurbulence type='turbulence' baseFrequency='0.01' numOctaves='8' />
    </filter>
    <rect width='500' height='700' fill='#fff'/>
    <rect width='500' height='700' filter="url(#n)" opacity='1'/>
</svg>
`;
