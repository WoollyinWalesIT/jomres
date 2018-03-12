
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


/
*
*

 
*
 
M
a
n
a
g
e
s
 
t
h
e
 
c
u
r
r
e
n
t
 
u
s
e
r
'
s
 
a
c
c
e
s
s
 
r
i
g
h
t
s
.

 
*
/


/
/
A
c
c
e
s
s
 
l
e
v
e
l
s

/
/
5
0
:
 
r
e
c
e
p
t
i
o
n
i
s
t

/
/
7
0
:
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r

/
/
9
0
:
 
s
u
p
e
r
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r


c
l
a
s
s
 
j
r
_
u
s
e
r

{

 
 
 
 
/
*
*

 
 
 
 
 
*
 
C
o
n
s
t
r
u
c
t
o
r
.
 
S
e
t
s
 
t
h
e
 
u
s
e
r
 
u
p
 
b
a
s
e
d
 
o
n
 
t
h
e
 
$
m
y
 
v
a
r
i
a
b
l
e
.

 
 
 
 
 
*
/

 
 
 
 
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;

 
 
 
 
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
i
n
t
e
r
n
a
l
_
d
e
b
u
g
g
i
n
g
;


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
i
n
t
e
r
n
a
l
_
d
e
b
u
g
g
i
n
g
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
i
t
_
u
s
e
r
(
)
;

 
 
 
 
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
i
n
i
t
_
u
s
e
r
(
 
$
i
d
 
=
 
0
 
)

	
{

	
	
/
/
j
o
m
r
e
s
 
u
s
e
r
 
r
o
l
e

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
j
o
m
r
e
s
_
m
a
n
a
g
e
r
_
i
d
 
	
	
	
	
=
 
0
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
u
s
e
r
/
m
a
n
a
g
e
r
 
i
d
 
i
n
 
t
h
e
 
_
j
o
m
r
e
s
_
m
a
n
a
g
e
r
s
 
t
a
b
l
e

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
d
 
	
	
	
	
	
	
	
	
=
 
0
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
c
m
s
 
u
s
e
r
 
i
d
 
T
O
D
O
:
 
r
e
m
o
v
e
 
d
u
p
l
i
c
a
t
e
 
f
r
o
m
 
t
h
e
 
e
n
t
i
r
e
 
c
o
d
e
b
a
s
e

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
s
e
r
i
d
 
	
	
	
	
	
	
	
=
 
0
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
c
m
s
 
u
s
e
r
 
i
d
 
T
O
D
O
:
 
r
e
m
o
v
e
 
d
u
p
l
i
c
a
t
e
 
f
r
o
m
 
t
h
e
 
e
n
t
i
r
e
 
c
o
d
e
b
a
s
e

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
s
e
r
n
a
m
e
 
	
	
	
	
	
	
=
 
'
'
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
l
o
g
g
e
d
 
i
n
 
u
s
e
r
`
s
 
u
s
e
r
n
a
m
e

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
c
c
e
s
s
l
e
v
e
l
 
	
	
	
	
	
	
=
 
0
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
u
s
e
r
 
a
c
c
e
s
s
 
l
e
v
e
l

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
u
r
r
e
n
t
p
r
o
p
e
r
t
y
 
	
	
	
	
	
=
 
0
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
u
s
e
r
`
s
 
c
u
r
r
e
n
t
 
p
r
o
p
e
r
t
y

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
a
s
t
_
a
c
t
i
v
e
 
	
	
	
	
	
	
=
 
'
1
9
7
0
-
0
1
-
0
1
 
0
0
:
0
0
:
0
1
'
;
 
 
 
 
/
/
l
a
s
t
 
a
c
t
i
v
e

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
s
 
	
	
	
=
 
a
r
r
a
y
(
)
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
a
r
r
a
y
 
o
f
 
p
r
o
p
e
r
t
i
e
s
 
t
h
a
t
 
t
h
i
s
 
u
s
e
r
 
h
a
s
 
a
c
c
e
s
s
 
t
o

 
 
 
 
 
 
 
 
/
/
$
t
h
i
s
-
>
u
s
e
r
s
_
t
i
m
e
z
o
n
e
	
	
	
	
	
=
 
"
A
m
e
r
i
c
a
/
L
i
m
a
"
;
	
	
	
/
/
u
s
e
r
 
t
i
m
e
z
o
n
e
 
-
 
n
o
t
 
u
s
e
d
 
a
n
y
m
o
r
e

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
s
e
r
I
s
S
u
s
p
e
n
d
e
d
 
	
	
	
	
	
=
 
f
a
l
s
e
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
u
s
e
r
 
i
s
 
s
u
s
p
e
n
d
e
d
 
t
r
u
e
/
f
a
l
s
e


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
s
e
r
I
s
R
e
g
i
s
t
e
r
e
d
 
	
	
	
	
=
 
f
a
l
s
e
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
u
s
e
r
 
i
s
 
r
e
g
i
s
t
e
r
e
d
 
t
r
u
e
/
f
a
l
s
e

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
 
	
	
	
	
	
=
 
f
a
l
s
e
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
u
s
e
r
 
i
s
 
m
a
n
a
a
g
e
r
 
t
r
u
e
/
f
a
l
s
e
 
T
O
D
O
:
 
s
e
p
a
r
a
t
e
 
t
h
i
s
 
f
o
r
 
r
e
c
e
p
t
i
o
n
i
s
t
s
 
t
o
 
u
s
e
r
I
s
R
e
c
e
p
t
i
o
n
i
s
t

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
p
e
r
P
r
o
p
e
r
t
y
M
a
n
a
g
e
r
 
	
	
	
=
 
f
a
l
s
e
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
u
s
e
r
 
i
s
 
s
u
p
e
r
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
 
t
r
u
e
/
f
a
l
s
e

 
 
 
 
 
 
 
 
/
/
$
t
h
i
s
-
>
u
s
e
r
I
s
R
e
c
e
p
t
i
o
n
i
s
t
	
	
	
	
=
 
f
a
l
s
e
;
	
	
	
	
	
/
/
u
s
e
r
 
i
s
 
r
e
c
e
p
t
i
o
n
i
s
t
 
t
r
u
e
/
f
a
l
s
e

 
 
 
 
 
 
 
 
/
/
$
t
h
i
s
-
>
u
s
e
r
I
s
P
a
r
t
n
e
r
	
	
	
	
	
=
 
f
a
l
s
e
;
	
	
	
	
	
/
/
u
s
e
r
 
i
s
 
p
a
r
t
n
e
r
 
t
r
u
e
/
f
a
l
s
e
 
T
O
D
O
:
 
a
d
d
 
s
u
p
p
o
r
t
 
f
o
r
 
p
a
r
t
n
e
r
s
 
i
n
 
j
r
_
u
s
e
r

 
 
 
 
 
 
 
 
/
/
$
t
h
i
s
-
>
u
s
e
r
I
s
A
g
e
n
c
y
	
	
	
	
	
=
 
f
a
l
s
e
;
	
	
	
	
	
/
/
u
s
e
r
 
i
s
 
t
r
a
v
e
l
 
a
g
e
n
c
y
 
t
r
u
e
/
f
a
l
s
e
 
T
O
D
O
:
 
a
d
d
 
s
u
p
p
o
r
t
 
f
o
r
 
t
r
a
v
e
l
 
a
g
e
n
c
i
e
s

 
 
 
 
 
 
 
 
/
/
$
t
h
i
s
-
>
u
s
e
r
I
s
H
o
u
s
e
k
e
e
p
e
r
	
	
	
	
=
 
f
a
l
s
e
;
	
	
	
	
	
/
/
u
s
e
r
 
i
s
 
h
o
u
s
e
k
e
e
p
e
r
 
t
r
u
e
/
f
a
l
s
e
 
T
O
D
O
:
 
a
d
d
 
s
u
p
p
o
r
t
 
f
o
r
 
h
o
u
s
e
k
e
e
p
i
n
g

 
 
 
 
 
 
 
 
/
/
$
t
h
i
s
-
>
u
s
e
r
I
s
M
a
i
n
t
e
n
a
n
c
e
	
	
	
	
=
 
f
a
l
s
e
;
	
	
	
	
	
/
/
u
s
e
r
 
i
s
 
m
a
i
n
t
e
n
a
n
c
e
 
s
t
a
f
f
 
t
r
u
e
/
f
a
l
s
e
 
T
O
D
O
:
 
a
d
d
 
s
u
p
p
o
r
t
 
f
o
r
 
m
a
i
n
t
e
n
a
n
c
e
 
s
t
a
f
f


 
 
 
 
 
 
 
 
/
/
u
s
e
r
 
p
r
o
f
i
l
e
 
d
e
t
a
i
l
s
 
(
f
o
r
 
a
n
y
 
l
o
g
g
e
d
 
i
n
 
u
s
e
r
)

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
f
i
l
e
_
i
d
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
m
s
_
u
s
e
r
_
i
d
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
f
i
r
s
t
n
a
m
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
r
n
a
m
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
h
o
u
s
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
r
e
e
t
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
o
w
n
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
g
i
o
n
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
o
s
t
c
o
d
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
u
n
t
r
y
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
e
m
a
i
l
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
e
l
_
l
a
n
d
l
i
n
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
e
l
_
m
o
b
i
l
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
e
l
_
f
a
x
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
p
a
r
a
m
s
 
=
 
a
r
r
a
y
(
)
;
 
/
/
u
s
e
r
 
s
e
t
t
i
n
g
s


	
	
i
f
 
(
 
$
i
d
 
=
=
 
0
 
)
 
{

	
	
	
i
f
 
(
d
e
f
i
n
e
d
(
"
J
O
M
R
E
S
_
A
P
I
_
C
M
S
_
R
O
O
T
"
)
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
d
 
=
 
F
l
i
g
h
t
:
:
g
e
t
(
'
u
s
e
r
_
i
d
'
)
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
t
h
i
s
-
>
i
d
 
=
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
g
e
t
c
u
r
r
e
n
t
u
s
e
r
s
_
i
d
(
)
;

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
i
d
 
=
 
$
i
d
;

	
	
}

 
 
 
 
 
 
 
 


 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
i
d
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
s
e
r
I
s
R
e
g
i
s
t
e
r
e
d
 
=
 
t
r
u
e
;

	
	
	

	
	
	
/
/
r
e
g
i
s
t
e
r
e
d
 
u
s
e
r
 
a
c
c
e
s
s
 
l
e
v
e
l
 
w
i
l
l
 
b
e
 
1
 
(
l
o
w
e
s
t
 
a
f
t
e
r
 
0
:
n
o
t
 
r
e
g
i
s
t
e
r
e
d
)

	
	
	
$
t
h
i
s
-
>
a
c
c
e
s
s
l
e
v
e
l
 
=
 
1
;


 
 
 
 
 
 
 
 
 
 
 
 
/
/
g
e
t
 
u
s
e
r
 
p
r
o
f
i
l
e
 
d
e
t
a
i
l
s

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
e
t
_
u
s
e
r
_
p
r
o
f
i
l
e
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
/
/
g
e
t
 
u
s
e
r
 
r
o
l
e
 
d
e
t
a
i
l
s

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
e
t
_
u
s
e
r
_
r
o
l
e
(
)
;

 
 
 
 
 
 
 
 
}

	
}

	

 
 
 
 
p
u
b
l
i
c
 
s
t
a
t
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
I
n
s
t
a
n
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
 
=
 
n
e
w
 
s
e
l
f
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
l
o
n
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
C
l
o
n
i
n
g
 
n
o
t
 
a
l
l
o
w
e
d
 
o
n
 
a
 
s
i
n
g
l
e
t
o
n
 
o
b
j
e
c
t
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
s
e
t
(
$
s
e
t
t
i
n
g
,
 
$
v
a
l
u
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
s
e
l
f
:
:
$
i
n
t
e
r
n
a
l
_
d
e
b
u
g
g
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
S
e
t
t
i
n
g
 
'
.
$
s
e
t
t
i
n
g
.
'
 
t
o
 
'
.
$
v
a
l
u
e
.
'
 
<
b
r
>
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
$
s
e
t
t
i
n
g
 
=
 
$
v
a
l
u
e
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
g
e
t
(
$
s
e
t
t
i
n
g
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
s
e
l
f
:
:
$
i
n
t
e
r
n
a
l
_
d
e
b
u
g
g
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
G
e
t
t
i
n
g
 
'
.
$
s
e
t
t
i
n
g
.
'
 
w
h
i
c
h
 
i
s
 
'
.
$
t
h
i
s
-
>
$
s
e
t
t
i
n
g
.
'
<
b
r
>
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
$
s
e
t
t
i
n
g
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
$
s
e
t
t
i
n
g
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
G
e
t
 
u
s
e
r
 
p
r
o
f
i
l
e
 
d
e
t
a
i
l
s
 
f
o
r
 
t
h
e
 
l
o
g
g
e
d
 
i
n
 
u
s
e
r
.

 
 
 
 
 
*
/

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
_
u
s
e
r
_
p
r
o
f
i
l
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
C
a
n
`
t
 
g
e
t
 
u
s
e
r
 
p
r
o
f
i
l
e
 
f
o
r
 
c
m
s
 
u
s
e
r
 
i
d
 
0
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T

	
	
	
	
	
	
`
i
d
`
,

	
	
	
	
	
	
`
c
m
s
_
u
s
e
r
_
i
d
`
,

	
	
	
	
	
	
`
f
i
r
s
t
n
a
m
e
`
,

	
	
	
	
	
	
`
s
u
r
n
a
m
e
`
,

	
	
	
	
	
	
`
h
o
u
s
e
`
,

	
	
	
	
	
	
`
s
t
r
e
e
t
`
,

	
	
	
	
	
	
`
t
o
w
n
`
,

	
	
	
	
	
	
`
c
o
u
n
t
y
`
,

	
	
	
	
	
	
`
c
o
u
n
t
r
y
`
,

	
	
	
	
	
	
`
p
o
s
t
c
o
d
e
`
,

	
	
	
	
	
	
`
t
e
l
_
l
a
n
d
l
i
n
e
`
,

	
	
	
	
	
	
`
t
e
l
_
m
o
b
i
l
e
`
,

	
	
	
	
	
	
`
t
e
l
_
f
a
x
`
,

	
	
	
	
	
	
`
e
m
a
i
l
`
,

	
	
	
	
	
	
`
v
a
t
_
n
u
m
b
e
r
`
,

	
	
	
	
	
	
`
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
`
,

	
	
	
	
	
	
`
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e
`
,

	
	
	
	
	
	
`
p
a
r
a
m
s
`

	
	
	
	
	
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
g
u
e
s
t
_
p
r
o
f
i
l
e
 

	
	
	
	
	
W
H
E
R
E
 
`
c
m
s
_
u
s
e
r
_
i
d
`
 
=
 
'
 
.
(
i
n
t
)
 
$
t
h
i
s
-
>
i
d
.
'
 

	
	
	
	
	
L
I
M
I
T
 
1
 
'
;

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;


 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
r
e
s
u
l
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
f
i
l
e
_
i
d
 
=
 
$
r
-
>
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
m
s
_
u
s
e
r
_
i
d
 
=
 
$
r
-
>
c
m
s
_
u
s
e
r
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
f
i
r
s
t
n
a
m
e
 
=
 
$
r
-
>
f
i
r
s
t
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
r
n
a
m
e
 
=
 
$
r
-
>
s
u
r
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
h
o
u
s
e
 
=
 
$
r
-
>
h
o
u
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
r
e
e
t
 
=
 
$
r
-
>
s
t
r
e
e
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
o
w
n
 
=
 
$
r
-
>
t
o
w
n
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
g
i
o
n
 
=
 
$
r
-
>
c
o
u
n
t
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
u
n
t
r
y
 
=
 
$
r
-
>
c
o
u
n
t
r
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
o
s
t
c
o
d
e
 
=
 
$
r
-
>
p
o
s
t
c
o
d
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
e
l
_
l
a
n
d
l
i
n
e
 
=
 
$
r
-
>
t
e
l
_
l
a
n
d
l
i
n
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
e
l
_
m
o
b
i
l
e
 
=
 
$
r
-
>
t
e
l
_
m
o
b
i
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
e
l
_
f
a
x
 
=
 
$
r
-
>
t
e
l
_
f
a
x
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
e
m
a
i
l
 
=
 
$
r
-
>
e
m
a
i
l
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
 
=
 
$
r
-
>
v
a
t
_
n
u
m
b
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
 
=
 
$
r
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e
 
=
 
$
r
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e
;

	
	
	
	

	
	
	
	
i
f
 
(
!
e
m
p
t
y
(
$
r
-
>
p
a
r
a
m
s
)
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
p
a
r
a
m
s
 
=
 
j
s
o
n
_
d
e
c
o
d
e
(
$
r
-
>
p
a
r
a
m
s
,
 
t
r
u
e
)
;

	
	
	
	
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
G
e
t
 
u
s
e
r
 
r
o
l
e
 
f
o
r
 
t
h
e
 
l
o
g
g
e
d
 
i
n
 
u
s
e
r
.

 
 
 
 
 
*
/

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
_
u
s
e
r
_
r
o
l
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
C
a
n
`
t
 
g
e
t
 
u
s
e
r
 
r
o
l
e
 
f
o
r
 
c
m
s
 
u
s
e
r
 
i
d
 
0
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 

	
	
	
	
	
	
`
m
a
n
a
g
e
r
_
u
i
d
`
,

	
	
	
	
	
	
`
u
s
e
r
i
d
`
,

	
	
	
	
	
	
`
a
c
c
e
s
s
_
l
e
v
e
l
`
,

	
	
	
	
	
	
`
c
u
r
r
e
n
t
p
r
o
p
e
r
t
y
`
,

	
	
	
	
	
	
`
s
u
s
p
e
n
d
e
d
`
,

	
	
	
	
	
	
`
u
s
e
r
s
_
t
i
m
e
z
o
n
e
`
,

	
	
	
	
	
	
`
l
a
s
t
_
a
c
t
i
v
e
`

	
	
	
	
	
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
m
a
n
a
g
e
r
s
 

	
	
	
	
	
W
H
E
R
E
 
`
u
s
e
r
i
d
`
 
=
 
'
 
.
(
i
n
t
)
 
$
t
h
i
s
-
>
i
d
.
'
 

	
	
	
	
	
L
I
M
I
T
 
1
 
'
;

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;


 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
r
e
s
u
l
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
T
O
D
O
:
 
c
h
a
n
g
e
 
t
h
i
s
 
t
o
 
a
 
f
u
n
c
t
i
o
n
 
t
h
a
t
 
c
h
e
c
k
s
 
t
h
e
 
a
c
c
e
s
s
 
l
e
v
e
l

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
 
=
 
t
r
u
e
;


 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
j
o
m
r
e
s
_
m
a
n
a
g
e
r
_
i
d
 
=
 
$
r
-
>
m
a
n
a
g
e
r
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
s
e
r
i
d
 
=
 
$
r
-
>
u
s
e
r
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
c
c
e
s
s
l
e
v
e
l
 
=
 
$
r
-
>
a
c
c
e
s
s
_
l
e
v
e
l
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
u
r
r
e
n
t
p
r
o
p
e
r
t
y
 
=
 
$
r
-
>
c
u
r
r
e
n
t
p
r
o
p
e
r
t
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
s
e
r
n
a
m
e
 
=
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
g
e
t
c
u
r
r
e
n
t
u
s
e
r
s
_
u
s
e
r
n
a
m
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
s
e
r
I
s
S
u
s
p
e
n
d
e
d
 
=
 
(
b
o
o
l
)
 
$
r
-
>
s
u
s
p
e
n
d
e
d
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
r
-
>
l
a
s
t
_
a
c
t
i
v
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
a
s
t
_
a
c
t
i
v
e
 
=
 
$
r
-
>
l
a
s
t
_
a
c
t
i
v
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
	
	

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
*
 
i
f
 
(
 
i
s
s
e
t
(
 
$
r
-
>
u
s
e
r
s
_
t
i
m
e
z
o
n
e
 
)
 
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
s
e
r
s
_
t
i
m
e
z
o
n
e
 
	
	
	
	
=
 
$
r
-
>
u
s
e
r
s
_
t
i
m
e
z
o
n
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
*
/


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
a
c
c
e
s
s
l
e
v
e
l
 
>
=
 
9
0
)
 
{
 
/
/
t
h
i
s
 
u
s
e
r
 
i
s
 
a
 
s
u
p
e
r
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
 
(
o
r
 
e
v
e
n
 
h
i
g
h
e
r
)
 
a
n
d
 
h
a
s
 
a
c
c
e
s
s
 
t
o
 
a
l
l
 
p
r
o
p
e
r
t
i
e
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
p
e
r
P
r
o
p
e
r
t
y
M
a
n
a
g
e
r
 
=
 
t
r
u
e
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
g
e
t
 
a
l
l
 
p
r
o
p
e
r
t
i
e
s
 
i
n
 
s
y
s
t
e
m
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
e
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
e
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
e
s
-
>
g
e
t
_
a
l
l
_
p
r
o
p
e
r
t
i
e
s
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
s
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
a
l
l
_
p
r
o
p
e
r
t
i
e
s
_
i
n
_
s
y
s
t
e
m
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{
 
/
/
t
h
i
s
 
u
s
e
r
 
h
a
s
 
a
c
c
e
s
s
 
o
n
l
y
 
t
o
 
i
t
`
s
 
o
w
n
 
p
r
o
p
e
r
t
i
e
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
p
e
r
P
r
o
p
e
r
t
y
M
a
n
a
g
e
r
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
`
p
r
o
p
e
r
t
y
_
u
i
d
`
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
m
a
n
a
g
e
r
s
_
p
r
o
p
e
r
t
y
s
_
x
r
e
f
 
W
H
E
R
E
 
`
m
a
n
a
g
e
r
_
i
d
`
 
=
 
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
n
a
g
e
r
s
T
o
P
r
o
p
e
r
t
y
L
i
s
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
m
a
n
a
g
e
r
s
T
o
P
r
o
p
e
r
t
y
L
i
s
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
m
a
n
a
g
e
r
s
T
o
P
r
o
p
e
r
t
y
L
i
s
t
 
a
s
 
$
x
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
s
[
]
 
=
 
$
x
-
>
p
r
o
p
e
r
t
y
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
t
h
i
s
-
>
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
s
)
 
&
&
 
!
d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
_
A
D
M
I
N
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
W
e
 
c
a
n
'
t
 
t
h
r
o
w
 
a
n
 
e
r
r
o
r
 
h
e
r
e
,
 
o
t
h
e
r
w
i
s
e
 
t
h
e
 
w
h
o
l
e
 
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
v
a
r
i
a
b
l
e
 
i
s
n
'
t
 
c
r
e
a
t
e
d
 
a
n
d
 
a
l
l
 
s
o
r
t
s
 
o
f
 
w
o
n
d
e
r
f
u
l
 
t
h
i
n
g
s
 
m
i
g
h
t
 
h
a
p
p
e
n
,
 
s
o
 
i
n
s
t
e
a
d
 
w
e
'
l
l
 
j
u
s
t
 
r
e
s
e
t
 
t
h
e
 
u
s
e
r
 
s
o
 
t
h
a
t
 
t
h
e
y
 
d
o
n
'
t
 
h
a
v
e
 
a
n
y
 
a
c
c
e
s
s
 
r
i
g
h
t
s
 
t
o
 
p
r
o
p
e
r
t
i
e
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
T
O
D
O
:
 
s
i
l
e
n
t
l
y
 
r
e
m
o
v
e
 
t
h
e
 
m
a
n
a
g
e
r
 
u
s
e
r
 
r
o
l
e
 
f
r
o
m
 
t
h
i
s
 
u
s
e
r

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
e
t
_
m
a
n
a
g
e
r
_
t
o
_
n
o
n
_
m
a
n
a
g
e
r
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
n
_
a
r
r
a
y
(
$
t
h
i
s
-
>
c
u
r
r
e
n
t
p
r
o
p
e
r
t
y
,
 
$
t
h
i
s
-
>
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
u
r
r
e
n
t
p
r
o
p
e
r
t
y
 
=
 
$
t
h
i
s
-
>
s
e
t
T
o
A
n
y
A
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
y
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
e
t
_
c
u
r
r
e
n
t
p
r
o
p
e
r
t
y
(
$
t
h
i
s
-
>
c
u
r
r
e
n
t
p
r
o
p
e
r
t
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}

	

	
/
/
u
p
d
a
t
e
 
u
s
e
r
 
p
r
o
f
i
l
e
 
p
a
r
a
m
s

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
u
p
d
a
t
e
_
p
a
r
a
m
s
(
)

	
{

	
	
i
f
 
(
 
$
t
h
i
s
-
>
i
d
 
=
=
 
0
 
)
 
{

	
	
	
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
 
"
E
r
r
o
r
:
 
C
m
s
 
u
s
e
r
 
i
d
 
n
o
t
 
s
e
t
"
)
;

	
	
}


	
	
i
f
 
(
$
t
h
i
s
-
>
p
r
o
f
i
l
e
_
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
r
e
s
_
g
u
e
s
t
_
p
r
o
f
i
l
e
 
(
`
c
m
s
_
u
s
e
r
_
i
d
`
,
`
f
i
r
s
t
n
a
m
e
`
,
`
s
u
r
n
a
m
e
`
,
`
h
o
u
s
e
`
,
`
s
t
r
e
e
t
`
,
`
t
o
w
n
`
,
`
c
o
u
n
t
y
`
,
`
c
o
u
n
t
r
y
`
,
`
p
o
s
t
c
o
d
e
`
,
`
t
e
l
_
l
a
n
d
l
i
n
e
`
,
`
t
e
l
_
m
o
b
i
l
e
`
,
`
t
e
l
_
f
a
x
`
,
`
e
m
a
i
l
`
,
`
v
a
t
_
n
u
m
b
e
r
`
,
`
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
`
)
 
V
A
L
U
E
S
 
(
'
"
.
(
i
n
t
)
 
$
t
h
i
s
-
>
i
d
.
"
'
,
'
'
,
'
'
,
'
'
,
'
'
,
'
'
,
'
'
,
'
'
,
'
'
,
'
'
,
'
'
,
'
'
,
'
'
,
'
'
,
0
)
"
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
 
'
U
n
a
b
l
e
 
t
o
 
i
n
s
e
r
t
 
u
s
e
r
 
p
r
o
f
i
l
e
 
d
e
t
a
i
l
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
}

	
	

	
	
/
/
u
p
d
a
t
e
 
u
s
e
r
 
p
a
r
a
m
s

	
	
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
#
_
_
j
o
m
r
e
s
_
g
u
e
s
t
_
p
r
o
f
i
l
e
 
S
E
T
 
`
p
a
r
a
m
s
`
 
=
 
'
"
.
j
s
o
n
_
e
n
c
o
d
e
(
$
t
h
i
s
-
>
p
a
r
a
m
s
)
.
"
'
 
W
H
E
R
E
 
`
c
m
s
_
u
s
e
r
_
i
d
`
 
=
 
"
 
.
 
(
i
n
t
)
$
t
h
i
s
-
>
i
d
;

	
	

	
	
i
f
 
(
 
!
d
o
I
n
s
e
r
t
S
q
l
(
 
$
q
u
e
r
y
,
 
'
'
 
)
 
)
 
{

	
	
	
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
 
"
E
r
r
o
r
:
 
U
s
e
r
 
p
a
r
a
m
s
 
u
p
d
a
t
e
 
f
a
i
l
e
d
"
)
;

	
	
}

	
	

	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}

	

 
 
 
 
/
*
*

 
 
 
 
 
*
 
R
e
s
e
t
 
m
a
n
a
g
e
r
 
t
o
 
n
o
n
 
m
a
n
a
g
e
r
.

 
 
 
 
 
*
/

 
 
 
 
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
r
e
s
e
t
_
m
a
n
a
g
e
r
_
t
o
_
n
o
n
_
m
a
n
a
g
e
r
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
c
c
e
s
s
l
e
v
e
l
 
=
 
1
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
u
r
r
e
n
t
p
r
o
p
e
r
t
y
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
a
s
t
_
a
c
t
i
v
e
 
=
 
'
1
9
7
0
-
0
1
-
0
1
 
0
0
:
0
0
:
0
1
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
s
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
j
o
m
r
e
s
_
m
a
n
a
g
e
r
_
i
d
 
=
 
0
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
p
e
r
P
r
o
p
e
r
t
y
M
a
n
a
g
e
r
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
s
e
r
I
s
S
u
s
p
e
n
d
e
d
 
=
 
f
a
l
s
e
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
G
e
t
 
t
h
e
 
m
a
n
g
e
r
'
s
 
c
u
r
r
e
n
t
 
p
r
o
p
e
r
t
y
.
 
I
f
 
i
t
 
i
s
 
u
n
s
e
t
 
(
t
h
e
 
m
a
n
a
g
e
r
 
h
a
s
 
j
u
s
t
 
d
e
l
e
t
e
d
 
a
 
p
r
o
p
e
r
t
y
)
 
t
h
e
n
 
r
e
s
e
t
s
 
t
h
e
 
c
u
r
r
e
n
t
 
p
r
o
p
e
r
t
y
 
t
o
 
t
h
e
 
f
i
r
s
t
 
p
r
o
p
e
r
t
y
 
e
n
c
o
u
n
t
e
r
e
d
 
i
n
 
t
h
e
 
p
r
o
p
e
r
t
y
s
 
t
a
b
l
e
.

 
 
 
 
 
*
/

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
h
e
c
k
_
c
u
r
r
e
n
t
p
r
o
p
e
r
t
y
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
`
p
r
o
p
e
r
t
y
s
_
u
i
d
`
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
s
 
W
H
E
R
E
 
`
p
r
o
p
e
r
t
y
s
_
u
i
d
`
 
=
 
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
c
u
r
r
e
n
t
p
r
o
p
e
r
t
y
.
'
 
L
I
M
I
T
 
1
'
;

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
1
)
;

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
r
e
s
u
l
t
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
e
t
T
o
A
n
y
A
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
y
(
)
;
 
/
/
 
T
h
e
 
s
u
p
e
r
 
a
d
m
i
n
'
s
 
c
u
r
r
e
n
t
 
p
r
o
p
e
r
t
y
 
i
s
 
u
n
s
e
t
.
 
L
e
t
'
s
 
f
i
n
d
 
t
h
e
 
f
i
r
s
t
 
p
r
o
p
e
r
t
y
 
u
i
d
 
i
n
 
t
h
e
 
d
a
t
a
b
a
s
e
 
&
 
s
e
t
 
t
o
 
t
h
a
t
.

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
S
e
t
s
 
t
h
e
 
u
s
e
r
s
 
c
u
r
r
e
n
t
 
p
r
o
p
e
r
t
y
 
t
o
 
N
.
 
U
s
e
d
 
b
y
 
t
h
e
 
s
e
l
e
c
t
 
p
r
o
p
e
r
t
y
 
d
r
o
p
d
o
w
n
,
 
t
y
p
i
c
a
l
l
y
.

 
 
 
 
 
*
/

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
_
c
u
r
r
e
n
t
p
r
o
p
e
r
t
y
(
$
c
u
r
r
e
n
t
P
r
o
p
e
r
t
y
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
$
c
u
r
r
e
n
t
P
r
o
p
e
r
t
y
,
 
$
t
h
i
s
-
>
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
U
P
D
A
T
E
 
#
_
_
j
o
m
r
e
s
_
m
a
n
a
g
e
r
s
 
S
E
T
 
`
c
u
r
r
e
n
t
p
r
o
p
e
r
t
y
`
=
'
.
(
i
n
t
)
 
$
c
u
r
r
e
n
t
P
r
o
p
e
r
t
y
.
'
 
W
H
E
R
E
 
`
u
s
e
r
i
d
`
 
=
 
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
i
d
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
f
a
l
s
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
U
n
a
b
l
e
 
t
o
 
s
e
t
 
c
u
r
r
e
n
t
 
p
r
o
p
e
r
t
y
,
 
m
y
s
q
l
 
d
b
 
f
a
i
l
u
r
e
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
u
r
r
e
n
t
p
r
o
p
e
r
t
y
 
=
 
$
c
u
r
r
e
n
t
P
r
o
p
e
r
t
y
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
T
y
p
i
c
a
l
l
y
 
c
a
l
l
e
d
 
w
h
e
n
 
a
 
m
a
n
a
g
e
r
 
h
a
s
 
d
e
l
e
t
e
d
 
a
 
p
r
o
p
e
r
t
y
,
 
f
i
n
d
s
 
a
n
o
t
h
e
r
 
p
r
o
p
e
r
t
y
 
t
h
a
t
 
t
h
e
y
 
a
r
e
 
a
u
t
h
o
r
i
s
e
d
 
t
o
 
m
a
n
a
g
e
 
a
n
d
 
m
a
k
e
s
 
t
h
i
s
 
t
h
e
i
r
 
c
u
r
r
e
n
t
 
p
r
o
p
e
r
t
y
.

 
 
 
 
 
*
/

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
T
o
A
n
y
A
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
y
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
s
e
t
(
$
t
h
i
s
-
>
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
s
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
c
u
r
r
e
n
t
(
$
t
h
i
s
-
>
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
s
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
!
d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
_
A
D
M
I
N
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
U
n
a
b
l
e
 
t
o
 
r
e
a
s
s
i
g
n
 
a
 
m
a
n
a
g
e
r
 
t
o
 
a
n
y
 
e
x
i
s
t
i
n
g
,
 
a
u
t
h
o
r
i
s
e
d
 
p
r
o
p
e
r
t
y
.
 
E
i
t
h
e
r
 
l
a
s
t
 
p
r
o
p
e
r
t
y
 
i
n
 
d
a
t
a
b
a
s
e
 
h
a
s
 
b
e
e
n
 
d
e
l
e
t
e
d
,
 
o
r
 
t
h
i
s
 
m
a
n
a
g
e
r
 
h
a
s
 
r
i
g
h
t
s
 
t
o
 
n
o
 
p
r
o
p
e
r
t
i
e
s
.
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
c
h
e
c
k
s
 
i
f
 
t
h
e
 
c
u
r
r
e
n
t
 
u
s
e
r
 
i
s
 
a
 
s
u
p
e
r
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
i
s
_
s
u
p
e
r
_
p
r
o
p
e
r
t
y
_
m
a
n
a
g
e
r
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
a
c
c
e
s
s
l
e
v
e
l
 
=
=
 
9
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
}


 
 
 
 
/
/
c
h
e
c
k
s
 
i
f
 
t
h
e
 
c
u
r
r
e
n
t
 
u
s
e
r
 
i
s
 
a
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
i
s
_
p
r
o
p
e
r
t
y
_
m
a
n
a
g
e
r
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
a
c
c
e
s
s
l
e
v
e
l
 
=
=
 
7
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
}


 
 
 
 
/
/
c
h
e
c
k
s
 
i
f
 
t
h
e
 
c
u
r
r
e
n
t
 
u
s
e
r
 
i
s
 
a
 
r
e
c
e
p
t
i
o
n
i
s
t

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
i
s
_
r
e
c
e
p
t
i
o
n
i
s
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
a
c
c
e
s
s
l
e
v
e
l
 
=
=
 
5
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
}

	

	
/
/
c
h
e
c
k
s
 
i
f
 
t
h
e
 
c
u
r
r
e
n
t
 
u
s
e
r
 
i
s
 
a
 
r
e
c
e
p
t
i
o
n
i
s
t

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
i
s
_
r
e
g
i
s
t
e
r
e
d
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
a
c
c
e
s
s
l
e
v
e
l
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
}

}

