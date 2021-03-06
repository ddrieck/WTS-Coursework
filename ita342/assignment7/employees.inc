<?php

function get_employees() {

$employees = array(
  array('McGregor', 'E.N.', 'Brakeman', '8/18/1918'),
  array('Andrus', 'O.R.', 'Engineer', '9/4/1917'),
  array('Hann', 'V.W.', 'Conductor', '7/7/1913'),
  array('King', 'J.', 'Conductor', '8/29/1891'),
  array('Khork', 'J.H.', 'Engineer', '10/25/1917'),
  array('Fairchild', 'F.', 'Brakeman', '7/4/1918'),
  array('VanScoter', 'H.', 'Brakeman', '11/14/1917'),
  array('Sheedy', 'E.C.', 'Brakeman', '8/29/1920'),
  array('Weaver', 'N.S.', 'Engineer', '1/1/1915'),
  array('Wales', 'F.L.', 'Conductor', '4/27/1916'),
  array('Pruner', 'L.S.', 'Engineer', '12/7/1915'),
  array('Atkins', 'F.W.', 'Engineer', '9/13/1917'),
  array('OBrien', 'J.W.', 'Engineer', '10/27/1912'),
  array('Packard', 'A.B.', 'Fireman', '9/20/1920'),
  array('Ormsby', 'A.R.', 'Conductor', '2/20/1908'),
  array('Benson', 'F.H.', 'Conductor', '9/5/1916'),
  array('Murray', 'J.H.', 'Conductor', '10/30/1900'),
  array('Sherwood', 'S.W.', 'Engineer', '11/16/1913'),
  array('Bartlett', 'O.L.', 'Engineer', '10/22/1916'),
  array('LeFay', 'G.J.', 'Engineer', '10/12/1914'),
  array('Harold', 'L.F.', 'Engineer', '10/17/1914'),
  array('McGregor', 'E.', 'Conductor', '9/29/1917'),
  array('Wilson', 'F.E.', 'Engineer', '12/10/1915'),
  array('Spawton', 'F.W.', 'Brakeman', '8/21/1920'),
  array('Burr', 'E.J.', 'Conductor', '12/5/1907'),
  array('Benson', 'O.J.', 'Engineer', '2/26/1916'),
  array('Maxon', 'H.T.', 'Engineer', '4/11/1916'),
  array('Thompson', 'E.N.', 'Brakeman', '12/29/1915'),
  array('Schreckengost', 'J.B.', 'Fireman', '4/20/1920'),
  array('Donahue', 'F.T.', 'Conductor', '8/28/1915'),
  array('Murray', 'J.R.', 'Conductor', '10/3/1905'),
  array('VanSchaick', 'F.L.', 'Engineer', '9/1/1915'),
  array('Ballard', 'C.M.', 'Conductor', '7/5/1909'),
  array('Montgomery', 'O.L.', 'Conductor', '9/23/1913'),
  array('Caparulo', 'N.J.', 'Engineer', '12/5/1907'),
  array('Taylor', 'K.W.', 'Brakeman', '8/31/1940'),
  array('Newark', 'J.B.', 'Engineer', '12/20/1917'),
  array('Lashure', 'G.M.', 'Engineer', '9/21/1904'),
  array('Rokenbrod', 'J.W.', 'Conductor', '10/19/1915'),
  array('King', 'J.', 'Conductor', '8/29/1891'),
  array('Flansburg', 'F.E.', 'Engineer', '1/13/1918'),
  array('Parker', 'G.E.', 'Engineer', '11/26/1911'),
  array('Whitford', 'F.D.', 'Brakeman', '8/9/1940'),
  array('Smith', 'J.W.', 'Brakeman', '3/16/1940'),
  array('McRae', 'J.F.', 'Conductor', '9/3/1909'),
  array('Coble', 'F.S.', 'Conductor', '7/19/1913'),
  array('Nesbit', 'E.J.', 'Conductor', '9/12/1916'),
  array('Terry', 'G.', 'Engineer', '10/22/1891'),
  array('Tanner', 'C.M.', 'Brakeman', '8/18/1915'),
  array('Prunoske', 'W.E.', 'Brakeman', '12/4/1915'),
  array('Wavrick', 'H.V.', 'Conductor', '3/1/1912'),
  array('Conaway', 'J.T.', 'Engineer', '11/16/1915'),
  array('Junker', 'C.F.', 'Engineer', '10/19/1915'),
  array('Elder', 'S.F.', 'Engineer', '10/18/1906'),
  array('Bradigan', 'G.H.', 'Conductor', '4/1/1917'),
  array('Coville', 'M.H.', 'Engineer', '10/6/1899'),
  array('Rice', 'H.O.', 'Engineer', '3/3/1918'),
  array('Mead', 'R.D.', 'Engineer', '1/29/1920'),
  array('ORourke', 'D.', 'Signalman', '8/27/1915'),
  array('Gordon', 'W.A.', 'Engineer', '1/11/1905'),
  array('Blake', 'J.R.', 'Brakeman', '11/26/1917'),
  array('McGregor', 'B.L.', 'Conductor', '9/29/1913'),
  array('Mullner', 'W.', 'Engineer', '10/11/1916'),
  array('Nelson', 'O.A.', 'Engineer', '11/13/1915'),
  array('Conklin', 'G.M.', 'Engineer', '11/17/1917'),
  array('Tanner', 'G.L.', 'Engineer', '3/1/1907'),
  array('Pyer', 'E.G.', 'Engineer', '3/10/1917'),
  array('Smith', 'R.C.', 'Engineer', '12/2/1916'),
  array('Morey', 'H.W.', 'Engineer', '10/8/1915'),
  array('Brahaney', 'J.H.', 'Brakeman', '3/1/1940'),
  array('Dungan', 'H.L.', 'Engineer', '11/28/1916'),
  array('Canfield', 'O.M.', 'Conductor', '3/11/1917'),
  array('Blanchard', 'W.J.', 'Engineer', '11/19/1913'),
  array('DeGain', 'G.F.Jr.', 'Signalman', '7/1/1931'),
  array('Yazak', 'H.R.', 'Engineer', '1/6/1918'),
  array('Fenton', 'T.', 'Engineer', '2/18/1914'),
  array('Murphy', 'E.J.', 'Engineer', '6/16/1917'),
  array('Lehman', 'F.', 'Engineer', '11/26/1917'),
  array('Palmer', 'F.M.', 'Conductor', '8/23/1910'),
  array('Barnaby', 'M.C.', 'Engineer', '9/3/1913'),
  array('Sprague', 'F.', 'Engineer', '8/8/1913'),
  array('Prentice', 'G.H.', 'Brakeman', '3/17/1940'),
  array('Burris', 'Leo', 'Fireman', '3/15/1920'),
  array('Stephens', 'W.D.', 'Brakeman', '9/27/1911'),
  array('Perkins', 'F.L.', 'Engineer', '3/8/1907'),
  array('Jones', 'E.P.', 'Engineer', '12/12/1905'),
  array('Palmer', 'H.', 'Brakeman', '10/23/1908'),
  array('Brundage', 'William', 'Conductor', '9/25/1913'),
  array('Linehan', 'J.F.', 'Brakeman', '6/8/1895'),
  array('Ahrens', 'A.W.', 'Brakeman', '8/8/1940'),
  array('Davis', 'A.H.', 'Conductor', '9/22/1918'),
  array('Clemons', 'William', 'Engineer', '11/14/1907'),
  array('Bean', 'L.L.', 'Conductor', '9/13/1916'),
  array('Sills', 'G.W.', 'Engineer', '9/16/1903'),
  array('Barber', 'J.V.', 'Engineer', '11/27/1913'),
  array('Hooker', 'F.E.', 'Conductor', '9/27/1916'),
  array('Boh', 'G.M.', 'Engineer', '12/14/1903'),
  array('Crowe', 'J.R.', 'Conductor', '12/6/1910'),
  array('Junker', 'G.A.', 'Engineer', '9/7/1918'),
  array('Zeliff', 'C.O.', 'Fireman', '10/22/1911'),
  array('Poorman', 'C.B.', 'Engineer', '8/11/1913'),
  array('Whealon', 'D.J.', 'Brakeman', '10/24/1901'),
  array('Nary', 'J.T.', 'Engineer', '5/10/1888'),
  array('Weaver', 'I.L.', 'Engineer', '9/28/1916'),
  array('Ross', 'J.L.', 'Engineer', '11/10/1911'),
  array('Saunders', 'O.J.', 'Engineer', '2/21/1907'),
  array('McRae', 'J.F.', 'Conductor', '9/3/1909'),
  array('Hirt', 'R.W.', 'Engineer', '2/2/1920'),
  array('Eisenhardt', 'L.F.', 'Engineer', '12/4/1904'),
  array('Carpenter', 'E.', 'Fireman', '12/9/1940'),
  array('Shaw', 'A.A.', 'Conductor', '2/28/1918'),
  array('ORourke', 'D.', 'Brakeman', '8/27/1915'),
  array('Eveland', 'H.A.', 'Engineer', '12/5/1917'),
  array('Burlingham', 'E.F.', 'Engineer', '2/24/1903'),
  array('Dodd', 'A.A.', 'Engineer', '10/22/1914'),
  array('Conway', 'F.J.', 'Conductor', '11/5/1915'),
  array('Painter', 'C.', 'Engineer', '11/17/1913'),
  array('Logue', 'H.N.', 'Conductor', '7/9/1910'),
  array('Ivey', 'J.H.', 'Brakeman', '8/7/1940'),
  array('Furlong', 'W.S.', 'Conductor', '9/26/1916'),
  array('OBrien', 'F.G.', 'Signalman', '8/22/1901'),
  array('Wallin', 'E.A.', 'Conductor', '10/5/1914'),
  array('Clark', 'H.D.', 'Conductor', '3/10/1908'),
  array('White', 'R.C.', 'Engineer', '10/8/1915'),
  array('Williamson', 'R.J.', 'Engineer', '9/22/1911'),
  array('Strickland', 'W.T.', 'Engineer', '9/17/1912'),
  array('Martin', 'R.H.', 'Engineer', '11/1/1915'),
  array('Martin', 'H.S.', 'Conductor', '4/20/1918'),
  array('Stevens', 'W.E.', 'Engineer', '12/23/1907'),
  array('Murray', 'J.R.', 'Conductor', '10/3/1905'),
  array('Glover', 'W.L.', 'Engineer', '10/24/1915'),
  array('Prunoske', 'W.E.', 'Signalman', '12/4/1915'),
  array('Craft', 'H.G.', 'Conductor', '5/19/1917'),
  array('Whealon', 'D.J.', 'Agent', '10/24/1901'),
  array('Travis', 'T.M.', 'Fireman', '2/24/1923'),
  array('Murray', 'J.H.', 'Conductor', '10/30/1900'),
  array('Shute', 'F.W.', 'Engineer', '2/22/1912'),
  array('Averill', 'O.A.', 'Engineer', '3/6/1917'),
  array('Allen', 'L.H.', 'Engineer', '3/22/1918'),
  array('Zircklebach', 'O.H.', 'Engineer', '10/15/1907'),
  array('Lamphear', 'W.D.', 'Engineer', '9/24/1898'),
  array('Harington', 'O.H.', 'Engineer', '10/30/1915'),
  array('Dahill', 'W.M.', 'Agent', '3/1/1937'),
  array('Brokaw', 'I.D.', 'Conductor', '7/22/1915'),
  array('Randolph', 'G.W.', 'Engineer', '11/29/1916'),
  array('Groat', 'H.M.', 'Conductor', '7/17/1916'),
  array('Reed', 'B.C.', 'Fireman', '7/17/1920'),
  array('Huff', 'Clark', 'Conductor', '8/31/1913'),
  array('Bennett', 'V.E.', 'Engineer', '12/2/1918'),
  array('Bartlett', 'V.E.', 'Engineer', '10/16/1915'),
  array('Pettibone', 'F.W.', 'Brakeman', '3/11/1923'),
  array('Higgins', 'R.W.', 'Engineer', '1/25/1905'),
  array('Ballard', 'C.M.', 'Conductor', '7/5/1909'),
  array('Kelly', 'J.H.', 'Conductor', '11/1/1900'),
  array('Porter', 'J.O.', 'Conductor', '11/4/1913'),
  array('Lonsberry', 'E.J.', 'Fireman', '4/30/1920'),
  array('Collingwood', 'R.', 'Signalman', '6/11/1915'),
  array('Ball', 'E.B.', 'Engineer', '3/20/1916'),
  array('Stephens', 'W.D.', 'Signalman', '9/27/1911'),
  array('Stephens', 'F.J.', 'Engineer', '10/15/1900'),
  array('Whalen', 'E.', 'Brakeman', '10/8/1940'),
  array('Smith', 'G.H.', 'Conductor', '4/20/1911'),
  array('Hedges', 'G.A.', 'Conductor', '10/22/1909'),
  array('Smith', 'R.F.', 'Brakeman', '3/1/1940'),
  array('Gleesattel', 'J.F.', 'Engineer', '9/4/1915'),
  array('Zaproski', 'E.J.', 'Engineer', '10/9/1915'),
  array('Price', 'R.J.', 'Conductor', '2/27/1915'),
  array('McCarthy', 'W.J.', 'Engineer', '1/25/1914'),
  array('DeGain', 'G.F.', 'Conductor', '8/30/1912'),
  array('Sullivan', 'H.J.', 'Engineer', '8/22/1915'),
  array('Funk', 'E.J.', 'Engineer', '11/13/1912'),
  array('Kelly', 'J.H.', 'Conductor', '11/1/1900'),
  array('Havens', 'M.L.', 'Brakeman', '3/17/1920'),
  array('Okneski', 'F.R.', 'Conductor', '9/1/1913'),
  array('Kerr', 'P.S.', 'Engineer', '10/1/1914'),
  array('Spears', 'G.S.', 'Engineer', '2/13/1906'),
  array('Gilson', 'E.J.', 'Brakeman', '8/6/1940'),
  array('Hurlburt', 'R.D.', 'Engineer', '1/1/1904'),
  array('Ellis', 'I.', 'Engineer', '12/30/1915'),
  array('Kightlinger', 'L.F.', 'Fireman', '11/20/1940'),
  array('Ballard', 'S.H.', 'Foreman', '11/5/1914'),
  array('Logue', 'H.N.', 'Conductor', '7/9/1910'),
  array('Woodard', 'O.F.', 'Engineer', '1/2/1915'),
  array('Emerson', 'J.T.', 'Conductor', '10/30/1907'),
  array('Green', 'E.H.', 'Engineer', '3/1/1908'),
  array('Evans', 'H.A.', 'Engineer', '10/1/1904'),
  array('Whiteman', 'C.S.', 'Conductor', '8/25/1901'),
  array('Hover', 'J.M.', 'Conductor', '5/9/1916'),
  array('Jackson', 'J.O.', 'Fireman', '11/6/1920'),
  array('Mills', 'O.V.', 'Engineer', '9/18/1917'),
  array('Elder', 'J.C.', 'Engineer', '11/18/1913'),
  array('Champlin', 'B.L.', 'Brakeman', '3/18/1940'),
  array('Dieterman', 'A.E.', 'Conductor', '7/30/1915'),
  array('Hedges', 'G.A.', 'Conductor', '10/22/1909'),
  array('Haynes', 'A.G.', 'Engineer', '11/25/1905'),
  array('OBrien', 'F.G.', 'Brakeman', '8/22/1901'),
  array('White', 'F.A.', 'Brakeman', '9/20/1918'),
  array('Kelly', 'F.H.', 'Conductor', '10/17/1913'),
  array('Flansburg', 'E.G.', 'Engineer', '10/6/1907'),
  array('Witter', 'A.W.', 'Engineer', '12/20/1905'),
  array('Andrus', 'F.I.', 'Fireman', '6/20/1920'),
  array('Manry', 'B.A.', 'Engineer', '10/10/1918'),
  array('Terry', 'S.A.', 'Fireman', '1/11/1905'),
  array('Tanner', 'C.M.', 'Signalman', '8/16/1915'),
  array('Whiteman', 'C.S.', 'Conductor', '8/25/1901'),
  array('Bean', 'L.E.', 'Conductor', '11/26/1909'),
  array('Cary', 'R.D.', 'Engineer', '11/8/1918'),
  array('Ross', 'M.', 'Engineer', '3/17/1917'),
  array('Johnson', 'O.B.', 'Engineer', '10/10/1916'),
  array('Painter', 'T.F.', 'Conductor', '7/4/1913'),
  array('Herrick', 'H.J.', 'Engineer', '10/5/1916'),
  array('Perry', 'G.', 'Engineer', '10/17/1911'),
  array('Curran', 'J.E.', 'Conductor', '3/15/1916'),
  array('Smith', 'O.B.', 'Conductor', '7/10/1915'),
  array('Townsend', 'G.C.', 'Conductor', '2/13/1907'),
  array('Thompson', 'E.M.', 'Signalman', '12/29/1915'),
  array('Smith', 'A.J.', 'Conductor', '3/30/1918'),
  array('Parker', 'O.H.', 'Conductor', '7/29/1916'),
  array('Chapin', 'H.J.', 'Engineer', '12/22/1915'),
  array('Gilbert', 'J.M.', 'Engineer', '2/20/1906'),
  array('Hull', 'C.E.', 'Brakeman', '9/11/1927'),
  array('Taft', 'R.H.', 'Conductor', '9/25/1916'),
  array('Schoonmaker', 'F.W.', 'Brakeman', '7/8/1940'),
  array('McLaughlin', 'M.J.', 'Brakeman', '3/14/1940'),
  array('Ormsby', 'A.R.', 'Conductor', '2/20/1908'),
  array('Tyler', 'G.L.', 'Fireman', '6/16/1920'),
  array('Inman', 'W.H.', 'Conductor', '7/9/1913'),
  array('Barnett', 'F.P.', 'Brakeman', '3/14/1940'),
  array('Linehan', 'J.F.', 'Signalman', '6/8/1895'),
  array('Shaughnessy', 'H.E.', 'Brakeman', '7/8/1940'),
); 

return $employees;
}

?>
