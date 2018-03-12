
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


c
l
a
s
s
 
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s

{

	
p
r
o
t
e
c
t
e
d
 
$
j
r
C
o
n
f
i
g
;

	

	
p
r
o
t
e
c
t
e
d
 
$
o
p
t
i
m
i
z
e
r
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

	
	
$
s
i
t
e
C
o
n
f
i
g
 
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
c
o
n
f
i
g
_
s
i
t
e
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
'
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
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;

	
	

	
	
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
j
r
C
o
n
f
i
g
[
'
i
m
a
g
e
s
_
i
m
p
o
r
t
e
d
_
t
o
_
d
b
'
]
 
=
=
 
'
0
'
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
_
d
b
 
=
 
f
a
l
s
e
;
 
/
/
w
e
`
l
l
 
s
c
a
n
d
i
r
 
f
o
r
 
i
m
a
g
e
s

	
	
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
u
s
e
_
d
b
 
=
 
t
r
u
e
;
 
/
/
i
m
a
g
e
s
 
a
r
e
 
a
l
r
e
a
d
y
 
i
m
p
o
r
t
e
d
 
t
o
 
d
b

	
	
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
j
r
C
o
n
f
i
g
[
'
o
p
t
i
m
i
z
e
_
i
m
a
g
e
s
'
]
 
=
=
 
'
0
'
)
 
{

	
	
	
$
t
h
i
s
-
>
o
p
t
i
m
i
z
e
_
i
m
a
g
e
s
 
=
 
f
a
l
s
e
;
 
/
/
n
o
 
i
m
a
g
e
 
o
p
t
i
m
i
z
a
t
i
o
n
 
p
e
r
f
o
r
m
e
d

	
	
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
o
p
t
i
m
i
z
e
_
i
m
a
g
e
s
 
=
 
t
r
u
e
;
 
/
/
u
p
l
o
a
d
e
d
 
i
m
a
g
e
s
 
w
i
l
l
 
b
e
 
o
p
t
i
m
i
z
e
d
 
f
o
r
 
w
e
b

	
	
}


	
	
/
/
i
f
 
i
m
a
g
e
s
 
d
e
t
a
i
l
s
 
a
r
e
 
s
t
o
r
e
d
 
i
n
 
d
b
,
 
w
e
 
m
a
y
 
w
a
n
t
 
t
o
 
u
s
e
 
A
m
a
z
o
n
 
S
3

	
	
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
u
s
e
_
d
b
 
&
&
 

	
	
	
$
t
h
i
s
-
>
j
r
C
o
n
f
i
g
[
'
a
m
a
z
o
n
_
s
3
_
a
c
t
i
v
e
'
]
 
=
=
 
'
1
'
 
&
&
 

	
	
	
$
t
h
i
s
-
>
j
r
C
o
n
f
i
g
[
'
a
m
a
z
o
n
_
s
3
_
b
u
c
k
e
t
'
]
 
!
=
 
'
'
 
&
&
 

	
	
	
$
t
h
i
s
-
>
j
r
C
o
n
f
i
g
[
'
a
m
a
z
o
n
_
s
3
_
k
e
y
'
]
 
!
=
 
'
'
 
&
&

	
	
	
$
t
h
i
s
-
>
j
r
C
o
n
f
i
g
[
'
a
m
a
z
o
n
_
s
3
_
s
e
c
r
e
t
'
]
 
!
=
 
'
'

	
	
	
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
_
s
3
 
=
 
t
r
u
e
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
u
s
e
_
s
3
 
=
 
f
a
l
s
e
;

	
	
}

	
	

	
	
/
/
d
e
f
a
u
l
t
s

	
	
$
t
h
i
s
-
>
i
m
a
g
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
s
i
t
e
_
i
m
a
g
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
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
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
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
 
[
 
'
n
o
i
m
a
g
e
-
l
a
r
g
e
'
 
]
 
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
l
i
v
e
_
s
i
t
e
'
)
.
'
/
'
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
a
s
s
e
t
s
/
i
m
a
g
e
s
/
n
o
i
m
a
g
e
.
g
i
f
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
 
[
 
'
n
o
i
m
a
g
e
-
m
e
d
i
u
m
'
 
]
 
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
l
i
v
e
_
s
i
t
e
'
)
.
'
/
'
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
a
s
s
e
t
s
/
i
m
a
g
e
s
/
n
o
i
m
a
g
e
.
g
i
f
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
 
[
 
'
n
o
i
m
a
g
e
-
s
m
a
l
l
'
 
]
 
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
l
i
v
e
_
s
i
t
e
'
)
.
'
/
'
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
a
s
s
e
t
s
/
i
m
a
g
e
s
/
n
o
i
m
a
g
e
_
s
m
a
l
l
.
g
i
f
'
;

 
 
 
 
}


	
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
y
 
i
m
a
g
e
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
 
g
e
t
_
i
m
a
g
e
s
(
$
p
r
o
p
e
r
t
y
_
i
d
 
=
 
n
u
l
l
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
m
a
g
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


 
 
 
 
 
 
 
 
i
f
 
(
$
p
r
o
p
e
r
t
y
_
i
d
 
=
=
 
n
u
l
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
i
d
 
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
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
p
r
o
p
e
r
t
y
_
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
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
b
a
s
i
c
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

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
-
>
g
a
t
h
e
r
_
d
a
t
a
(
$
p
r
o
p
e
r
t
y
_
i
d
)
;


 
 
 
 
 
 
 
 
/
/
g
e
t
 
a
l
l
 
i
m
a
g
e
s
 
f
o
r
 
t
h
i
s
 
p
r
o
p
e
r
t
y
 
i
d

 
 
 
 
 
 
 
 
i
f
 
(
!
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
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
$
p
r
o
p
e
r
t
y
_
i
d
]
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
g
e
t
_
i
m
a
g
e
s
_
m
u
l
t
i
(
$
p
r
o
p
e
r
t
y
_
i
d
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
p
r
o
p
e
r
t
y
 
i
m
a
g
e
s

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
m
a
g
e
s
[
'
p
r
o
p
e
r
t
y
'
]
 
=
 
a
r
r
a
y
(
)
;


 
 
 
 
 
 
 
 
i
f
 
(
!
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
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
$
p
r
o
p
e
r
t
y
_
i
d
]
[
'
p
r
o
p
e
r
t
y
'
]
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
m
a
g
e
s
 
[
'
p
r
o
p
e
r
t
y
'
]
[
0
]
[
]
 
=
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
l
a
r
g
e
'
 
=
>
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
 
'
n
o
i
m
a
g
e
-
l
a
r
g
e
'
 
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
m
e
d
i
u
m
'
 
=
>
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
 
'
n
o
i
m
a
g
e
-
m
e
d
i
u
m
'
 
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
s
m
a
l
l
'
 
=
>
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
 
'
n
o
i
m
a
g
e
-
s
m
a
l
l
'
 
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
r
o
o
m
 
i
m
a
g
e
s

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
m
a
g
e
s
[
'
r
o
o
m
s
'
]
 
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
s
l
i
d
e
s
h
o
w
 
i
m
a
g
e
s

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
m
a
g
e
s
[
'
s
l
i
d
e
s
h
o
w
'
]
 
=
 
a
r
r
a
y
(
)
;


 
 
 
 
 
 
 
 
i
f
 
(
!
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
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
$
p
r
o
p
e
r
t
y
_
i
d
]
[
'
s
l
i
d
e
s
h
o
w
'
]
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
m
a
g
e
s
 
[
'
s
l
i
d
e
s
h
o
w
'
]
[
0
]
[
]
 
=
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
l
a
r
g
e
'
 
=
>
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
 
'
n
o
i
m
a
g
e
-
l
a
r
g
e
'
 
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
m
e
d
i
u
m
'
 
=
>
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
 
'
n
o
i
m
a
g
e
-
m
e
d
i
u
m
'
 
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
s
m
a
l
l
'
 
=
>
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
 
'
n
o
i
m
a
g
e
-
s
m
a
l
l
'
 
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
r
o
o
m
 
f
e
a
t
u
r
e
s
 
i
m
a
g
e
s

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
m
a
g
e
s
[
'
r
o
o
m
_
f
e
a
t
u
r
e
s
'
]
 
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
e
x
t
r
a
s
 
i
m
a
g
e
s

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
m
a
g
e
s
[
'
e
x
t
r
a
s
'
]
 
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
p
o
p
u
l
a
t
e
 
t
h
e
 
i
m
a
g
e
s
 
a
r
r
a
y

 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
$
p
r
o
p
e
r
t
y
_
i
d
]
 
a
s
 
$
k
 
=
>
 
$
v
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
m
a
g
e
s
[
 
$
k
 
]
 
=
 
$
v
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
a
d
d
 
d
e
f
a
u
l
t
 
i
m
a
g
e
s
 
f
o
r
 
e
a
c
h
 
r
o
o
m
 
i
f
 
n
o
 
o
t
h
e
r
 
i
m
a
g
e
s
 
a
r
e
 
s
e
t

 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
-
>
r
o
o
m
s
 
a
s
 
$
r
o
o
m
_
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
r
o
o
m
_
i
d
,
 
$
t
h
i
s
-
>
i
m
a
g
e
s
[
 
'
r
o
o
m
s
'
 
]
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
m
a
g
e
s
[
 
'
r
o
o
m
s
'
 
]
 
[
 
$
r
o
o
m
_
i
d
 
]
 
[
0
]
 
=
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
l
a
r
g
e
'
 
=
>
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
 
'
n
o
i
m
a
g
e
-
l
a
r
g
e
'
 
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
m
e
d
i
u
m
'
 
=
>
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
 
'
n
o
i
m
a
g
e
-
m
e
d
i
u
m
'
 
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
s
m
a
l
l
'
 
=
>
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
 
'
n
o
i
m
a
g
e
-
s
m
a
l
l
'
 
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
i
m
a
g
e
s
;

 
 
 
 
}

	

	
/
/
g
e
t
 
i
m
a
g
e
s
 
u
p
l
o
a
d
e
d
 
b
y
 
a
d
m
i
n
s
 
(
p
f
e
a
t
u
r
e
s
,
 
r
m
t
y
p
e
s
,
 
r
m
f
e
a
t
u
r
e
s
,
 
m
a
r
k
e
r
s
,
 
t
o
w
n
s
 
a
n
d
 
o
t
h
e
r
 
3
r
d
 
p
a
r
t
y
 
r
e
s
o
u
r
c
e
 
t
y
p
e
s
)

	
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
s
i
t
e
_
i
m
a
g
e
s
(
 
$
t
y
p
e
 
=
 
'
'
 
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
t
y
p
e
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
g
e
t
 
a
l
l
 
i
m
a
g
e
s
 
o
f
 
t
h
i
s
 
t
y
p
e

 
 
 
 
 
 
 
 
i
f
 
(
!
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
s
i
t
e
_
i
m
a
g
e
s
[
$
t
y
p
e
]
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
g
e
t
_
s
i
t
e
_
i
m
a
g
e
s
_
m
u
l
t
i
(
$
t
y
p
e
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
s
i
t
e
_
i
m
a
g
e
s
;

 
 
 
 
}


	
/
/
g
e
t
 
i
m
a
g
e
s
 
f
o
r
 
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
/
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
 
g
e
t
_
i
m
a
g
e
s
_
m
u
l
t
i
(
$
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
s
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
 
A
s
 
w
e
'
r
e
 
g
o
i
n
g
 
t
o
 
l
e
t
 
t
h
i
s
 
f
u
n
c
t
i
o
n
 
w
o
r
k
 
o
n
 
b
o
t
h
 
s
i
n
g
l
e
 
a
n
d
 
m
u
l
t
i
p
l
e
 
l
i
s
t
s
 
o
f
 
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
s
,
 
w
e
'
l
l
 
c
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
_
i
d
s
 
t
o
 
a
n
 
a
r
r
a
y
 
i
f
 
i
t
 
i
s
n
'
t
 
o
n
e
 
a
l
r
e
a
d
y

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
a
r
r
a
y
(
$
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
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
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
s
 
=
 
a
r
r
a
y
(
$
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
s
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
 
F
i
r
s
t
 
w
e
 
n
e
e
d
 
t
o
 
e
x
t
r
a
c
t
 
t
h
o
s
e
 
u
i
d
s
 
t
h
a
t
 
a
r
e
 
n
o
t
 
a
l
r
e
a
d
y
 
i
n
 
t
h
e
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
 
v
a
r
,
 
t
h
i
s
 
(
m
a
y
)
 
r
e
d
u
c
e
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
s
c
a
n
d
i
r
s
 
w
e
 
n
e
e
d
 
t
o
 
e
x
e
c
u
t
e

 
 
 
 
 
 
 
 
$
t
e
m
p
_
a
r
r
a
y
 
=
 
a
r
r
a
y
(
)
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
s
 
a
s
 
$
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
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
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
$
i
d
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
m
p
_
a
r
r
a
y
[
]
 
=
 
$
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
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
s
 
=
 
$
t
e
m
p
_
a
r
r
a
y
;

 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
t
e
m
p
_
a
r
r
a
y
)
;

	
	

	
	
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
s
)
)
 
{

	
	
	
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
u
s
e
_
d
b
)
 
{
 
/
/
g
e
t
 
i
m
a
g
e
s
 
f
r
o
m
 
d
b

	
	
	
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
i
m
a
g
e
s
_
m
u
l
t
i
_
f
r
o
m
_
d
b
(
$
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
s
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
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
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
m
c
H
a
n
d
l
e
r
'
)
;

	
	
	
$
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
-
>
t
r
i
g
g
e
r
E
v
e
n
t
(
'
0
3
3
7
9
'
)
;

	
	
	
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
 
=
 
$
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
-
>
m
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
D
a
t
a
[
'
0
3
3
7
9
'
]
;


	
	
	
/
/
 
T
h
i
s
 
s
e
c
t
i
o
n
 
w
i
l
l
 
f
i
n
d
 
a
l
l
 
i
m
a
g
e
s
 
u
p
l
o
a
d
e
d
 
b
y
 
t
h
e
 
n
e
w
 
m
e
d
i
a
 
c
e
n
t
r
e
'
s
 
f
u
n
c
t
i
o
n
a
l
i
t
y

	
	
	
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
r
e
s
o
u
r
c
e
_
t
y
p
e
s
)
)
 
{

	
	
	
 
 
 
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


	
	
	
f
o
r
e
a
c
h
 
(
$
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
s
 
a
s
 
$
p
r
o
p
e
r
t
y
_
i
d
)
 
{

	
	
	
	
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
$
p
r
o
p
e
r
t
y
_
i
d
]
 
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
b
a
s
e
_
p
a
t
h
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
$
p
r
o
p
e
r
t
y
_
i
d
.
J
R
D
S
;

	
	
	
	
$
r
e
l
_
p
a
t
h
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
R
E
L
P
A
T
H
.
$
p
r
o
p
e
r
t
y
_
i
d
.
'
/
'
;


	
	
	
	
$
d
i
r
_
c
o
n
t
e
n
t
s
 
=
 
s
c
a
n
d
i
r
_
g
e
t
d
i
r
e
c
t
o
r
i
e
s
(
$
b
a
s
e
_
p
a
t
h
)
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
d
i
r
_
c
o
n
t
e
n
t
s
 
a
s
 
$
d
i
r
)
 
{

	
	
	
	
	
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
e
s
o
u
r
c
e
_
t
y
p
e
s
[
$
d
i
r
]
)
)
 
{

	
	
	
	
	
	
$
s
u
b
_
d
i
r
e
c
t
o
r
i
e
s
 
=
 
s
c
a
n
d
i
r
_
g
e
t
d
i
r
e
c
t
o
r
i
e
s
(
$
b
a
s
e
_
p
a
t
h
.
$
d
i
r
.
J
R
D
S
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
s
u
b
_
d
i
r
e
c
t
o
r
i
e
s
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
s
u
b
_
d
i
r
e
c
t
o
r
i
e
s
 
a
s
 
$
r
e
s
o
u
c
e
_
i
d
)
 
{

	
	
	
	
	
	
	
	
$
r
e
s
o
u
r
c
e
_
i
m
a
g
e
s
 
=
 
s
c
a
n
d
i
r
_
g
e
t
f
i
l
e
s
(
$
b
a
s
e
_
p
a
t
h
.
$
d
i
r
.
J
R
D
S
.
$
r
e
s
o
u
c
e
_
i
d
.
J
R
D
S
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
o
u
r
c
e
_
i
m
a
g
e
s
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
o
u
r
c
e
_
i
m
a
g
e
s
 
a
s
 
$
i
m
a
g
e
)
 
{

	
	
	
	
	
	
	
	
	
	
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
 
[
 
$
p
r
o
p
e
r
t
y
_
i
d
 
]
 
[
 
$
d
i
r
 
]
 
[
 
$
r
e
s
o
u
c
e
_
i
d
 
]
 
[
]
 
=
 
a
r
r
a
y
(

	
	
	
	
	
	
	
	
	
	
	
'
l
a
r
g
e
'
 
=
>
 
$
r
e
l
_
p
a
t
h
.
$
d
i
r
.
'
/
'
.
$
r
e
s
o
u
c
e
_
i
d
.
'
/
'
.
$
i
m
a
g
e
,

	
	
	
	
	
	
	
	
	
	
	
'
m
e
d
i
u
m
'
 
=
>
 
$
r
e
l
_
p
a
t
h
.
$
d
i
r
.
'
/
'
.
$
r
e
s
o
u
c
e
_
i
d
.
'
/
m
e
d
i
u
m
/
'
.
$
i
m
a
g
e
,

	
	
	
	
	
	
	
	
	
	
	
'
s
m
a
l
l
'
 
=
>
 
$
r
e
l
_
p
a
t
h
.
$
d
i
r
.
'
/
'
.
$
r
e
s
o
u
c
e
_
i
d
.
'
/
t
h
u
m
b
n
a
i
l
/
'
.
$
i
m
a
g
e
,

	
	
	
	
	
	
	
	
	
	
	
)
;

	
	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
	
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
e
 
d
i
r
 
i
s
 
e
m
p
t
y

	
	
	
	
	
	
	
	
	
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
 
[
 
$
p
r
o
p
e
r
t
y
_
i
d
 
]
[
 
$
d
i
r
 
]
 
[
 
$
r
e
s
o
u
c
e
_
i
d
 
]
 
[
]
 
=
 
a
r
r
a
y
(

	
	
	
	
	
	
	
	
	
	
	
'
l
a
r
g
e
'
 
=
>
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
 
'
n
o
i
m
a
g
e
-
l
a
r
g
e
'
 
]
,

	
	
	
	
	
	
	
	
	
	
	
'
m
e
d
i
u
m
'
 
=
>
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
 
'
n
o
i
m
a
g
e
-
m
e
d
i
u
m
'
 
]
,

	
	
	
	
	
	
	
	
	
	
	
'
s
m
a
l
l
'
 
=
>
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
 
'
n
o
i
m
a
g
e
-
s
m
a
l
l
'
 
]
,

	
	
	
	
	
	
	
	
	
	
	
)
;

	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
}

	
	
	
	
	
	
}

	
	
	
	
	
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
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
;

 
 
 
 
}

	

	
/
/
g
e
t
 
i
m
a
g
e
s
 
f
r
o
m
 
d
b
 
f
o
r
 
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
s
 
a
r
r
a
y

	
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
 
g
e
t
_
i
m
a
g
e
s
_
m
u
l
t
i
_
f
r
o
m
_
d
b
(
$
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
s
 
=
 
a
r
r
a
y
(
)
)

	
{

	
	
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
s
)
)
 
{

	
	
	
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


	
	
$
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
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
m
c
H
a
n
d
l
e
r
'
)
;

	
	
$
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
-
>
t
r
i
g
g
e
r
E
v
e
n
t
(
'
0
3
3
7
9
'
)
;

	
	
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
 
=
 
$
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
-
>
m
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
D
a
t
a
[
'
0
3
3
7
9
'
]
;


	
	
/
/
 
T
h
i
s
 
s
e
c
t
i
o
n
 
w
i
l
l
 
f
i
n
d
 
a
l
l
 
i
m
a
g
e
s
 
u
p
l
o
a
d
e
d
 
b
y
 
t
h
e
 
n
e
w
 
m
e
d
i
a
 
c
e
n
t
r
e
'
s
 
f
u
n
c
t
i
o
n
a
l
i
t
y

	
	
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
r
e
s
o
u
r
c
e
_
t
y
p
e
s
)
)
 
{

	
	
 
 
 
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


	
	
$
q
u
e
r
y
 
=
 
"
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
,
 

	
	
	
	
	
	
`
r
e
s
o
u
r
c
e
_
t
y
p
e
`
,
 

	
	
	
	
	
	
`
r
e
s
o
u
r
c
e
_
i
d
`
,
 

	
	
	
	
	
	
`
f
i
l
e
n
a
m
e
`
,
 

	
	
	
	
	
	
`
v
e
r
s
i
o
n
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
i
m
a
g
e
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
_
u
i
d
`
 
I
N
 
(
"
.
j
o
m
r
e
s
_
i
m
p
l
o
d
e
(
$
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
s
)
.
"
)
 

	
	
	
	
	
O
R
D
E
R
 
B
Y
 
`
f
i
l
e
n
a
m
e
`
 
A
S
C
 
"
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
e
s
o
u
r
c
e
_
t
y
p
e
s
[
$
r
-
>
r
e
s
o
u
r
c
e
_
t
y
p
e
]
)
)
 
{

	
	
	
	
i
f
 
(
$
r
-
>
v
e
r
s
i
o
n
 
=
=
 
'
l
a
r
g
e
'
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
 
[
 
$
r
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
 
]
 
[
 
$
r
-
>
r
e
s
o
u
r
c
e
_
t
y
p
e
 
]
 
[
 
$
r
-
>
r
e
s
o
u
r
c
e
_
i
d
 
]
 
[
$
r
-
>
f
i
l
e
n
a
m
e
]
 
[
'
l
a
r
g
e
'
]
 
=
 

	
	
	
	
	
	
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
R
E
L
P
A
T
H
.
$
r
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
.
'
/
'
.
$
r
-
>
r
e
s
o
u
r
c
e
_
t
y
p
e
.
'
/
'
.
$
r
-
>
r
e
s
o
u
r
c
e
_
i
d
.
'
/
'
.
$
r
-
>
f
i
l
e
n
a
m
e
;

	
	
	
	
}
 
e
l
s
e
i
f
 
(
$
r
-
>
v
e
r
s
i
o
n
 
=
=
 
'
s
m
a
l
l
'
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
 
[
 
$
r
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
 
]
 
[
 
$
r
-
>
r
e
s
o
u
r
c
e
_
t
y
p
e
 
]
 
[
 
$
r
-
>
r
e
s
o
u
r
c
e
_
i
d
 
]
 
[
$
r
-
>
f
i
l
e
n
a
m
e
]
 
[
'
s
m
a
l
l
'
]
 
=
 

	
	
	
	
	
	
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
R
E
L
P
A
T
H
.
$
r
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
.
'
/
'
.
$
r
-
>
r
e
s
o
u
r
c
e
_
t
y
p
e
.
'
/
'
.
$
r
-
>
r
e
s
o
u
r
c
e
_
i
d
.
'
/
t
h
u
m
b
n
a
i
l
/
'
.
$
r
-
>
f
i
l
e
n
a
m
e
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
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
 
[
 
$
r
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
 
]
 
[
 
$
r
-
>
r
e
s
o
u
r
c
e
_
t
y
p
e
 
]
 
[
 
$
r
-
>
r
e
s
o
u
r
c
e
_
i
d
 
]
 
[
$
r
-
>
f
i
l
e
n
a
m
e
]
 
[
'
m
e
d
i
u
m
'
]
 
=
 

	
	
	
	
	
	
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
R
E
L
P
A
T
H
.
$
r
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
.
'
/
'
.
$
r
-
>
r
e
s
o
u
r
c
e
_
t
y
p
e
.
'
/
'
.
$
r
-
>
r
e
s
o
u
r
c
e
_
i
d
.
'
/
'
.
$
r
-
>
v
e
r
s
i
o
n
.
'
/
'
.
$
r
-
>
f
i
l
e
n
a
m
e
;

	
	
	
	
}

	
	
	
}

	
	
}

	
	

	
	
/
/
w
e
 
h
a
v
e
 
t
o
 
r
e
s
e
t
 
t
h
e
 
k
e
y
 
f
i
l
e
 
n
a
m
e
s
 
i
n
 
t
h
e
 
a
r
r
a
y
,
 
b
e
c
a
u
s
e
 
o
t
h
e
r
 
c
o
d
e
 
u
s
e
s
 
0
 
a
s
 
k
e
y
 
f
o
r
 
f
i
r
s
t
 
i
m
a
g
e

	
	
/
/
u
g
l
y
 
s
o
l
u
t
i
o
n
,
 
b
u
t
 
h
a
s
 
t
o
 
b
e
 
d
o
n
e
 
t
o
 
a
v
o
i
d
 
c
h
a
n
g
i
n
g
 
t
h
e
 
c
o
d
e
 
i
n
 
l
o
t
s
 
o
f
 
p
l
a
c
e
s

	
	
/
/
a
l
s
o
,
 
s
e
t
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
$
p
r
o
p
e
r
t
y
_
i
d
]
 
t
o
 
m
a
k
e
 
s
u
r
e
 
w
e
 
w
o
n
`
t
 
e
x
e
c
u
t
e
 
t
h
i
s
 
a
g
a
i
n
 
i
f
 
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
 
h
a
s
 
n
o
 
i
m
a
g
e
s
 

	
	
f
o
r
e
a
c
h
 
(
$
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
s
 
a
s
 
$
p
r
o
p
e
r
t
y
_
i
d
)
 
{

	
	
	
i
f
 
(
!
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
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
$
p
r
o
p
e
r
t
y
_
i
d
]
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
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
$
p
r
o
p
e
r
t
y
_
i
d
]
 
=
 
a
r
r
a
y
(
)
;

	
	
	
}
 
e
l
s
e
 
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
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
$
p
r
o
p
e
r
t
y
_
i
d
]
 
a
s
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
 
=
>
 
$
r
e
s
o
u
r
c
e
_
i
d
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
o
u
r
c
e
_
i
d
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

	
	
	
	
	
	
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
$
p
r
o
p
e
r
t
y
_
i
d
]
[
$
r
e
s
o
u
r
c
e
_
t
y
p
e
]
[
$
k
]
 
=
 
a
r
r
a
y
_
v
a
l
u
e
s
(
$
v
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
t
h
i
s
 
s
c
a
n
s
 
f
o
r
 
s
i
t
e
 
i
m
a
g
e
s
 
l
i
k
e
 
p
f
e
a
t
u
r
e
s
,
 
r
m
t
y
p
e
s
 
a
n
d
 
o
t
h
e
r
 
3
r
d
 
p
a
r
t
y
 
i
m
a
g
e
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
 
g
e
t
_
s
i
t
e
_
i
m
a
g
e
s
_
m
u
l
t
i
(
$
t
y
p
e
 
=
 
'
'
)

 
 
 
 
{

	
	
i
f
 
(
$
t
y
p
e
 
=
=
 
'
'
)
 
{

	
	
	
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
 
i
f
 
w
e
 
a
l
r
e
a
d
y
 
h
a
v
e
 
i
m
a
g
e
s
 
f
o
r
 
t
h
i
s
 
$
t
y
p
e

 
 
 
 
 
 
 
 
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
s
i
t
e
_
i
m
a
g
e
s
[
$
t
y
p
e
]
)
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
u
s
e
_
d
b
)
 
{

	
	
	
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
s
i
t
e
_
i
m
a
g
e
s
_
m
u
l
t
i
_
f
r
o
m
_
d
b
(
$
t
y
p
e
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
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
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
m
c
H
a
n
d
l
e
r
'
)
;

	
	
	
$
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
-
>
t
r
i
g
g
e
r
E
v
e
n
t
(
'
1
1
0
1
0
'
)
;

	
	
	
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
 
=
 
$
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
-
>
m
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
D
a
t
a
[
'
1
1
0
1
0
'
]
;

	
	
	

	
	
	
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
r
e
s
o
u
r
c
e
_
t
y
p
e
s
)
)

	
	
	
	
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


	
	
	
/
/
s
e
c
u
r
i
t
y
 
c
h
e
c
k

	
	
	
i
f
 
(
!
i
s
s
e
t
(
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
[
$
t
y
p
e
]
)
)
 
{

	
	
	
	
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


	
	
	
$
t
h
i
s
-
>
s
i
t
e
_
i
m
a
g
e
s
[
$
t
y
p
e
]
 
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
b
a
s
e
_
p
a
t
h
 
=
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
[
$
t
y
p
e
]
[
'
u
p
l
o
a
d
_
r
o
o
t
_
a
b
s
_
p
a
t
h
'
]
.
$
t
y
p
e
.
J
R
D
S
;

	
	
	
$
r
e
l
_
p
a
t
h
 
=
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
[
$
t
y
p
e
]
[
'
u
p
l
o
a
d
_
r
o
o
t
_
r
e
l
_
p
a
t
h
'
]
.
$
t
y
p
e
.
'
/
'
;


	
	
	
i
f
 
(
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
[
$
t
y
p
e
]
[
'
r
e
s
o
u
r
c
e
_
i
d
_
r
e
q
u
i
r
e
d
'
]
)
 
{

	
	
	
	
$
d
i
r
_
c
o
n
t
e
n
t
s
 
=
 
s
c
a
n
d
i
r
_
g
e
t
d
i
r
e
c
t
o
r
i
e
s
(
$
b
a
s
e
_
p
a
t
h
)
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
d
i
r
_
c
o
n
t
e
n
t
s
 
a
s
 
$
r
e
s
o
u
c
e
_
i
d
)
 
{

	
	
	
	
	
$
r
e
s
o
u
r
c
e
_
i
m
a
g
e
s
 
=
 
s
c
a
n
d
i
r
_
g
e
t
f
i
l
e
s
(
$
b
a
s
e
_
p
a
t
h
.
$
r
e
s
o
u
c
e
_
i
d
.
J
R
D
S
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
o
u
r
c
e
_
i
m
a
g
e
s
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
o
u
r
c
e
_
i
m
a
g
e
s
 
a
s
 
$
i
m
a
g
e
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
i
t
e
_
i
m
a
g
e
s
 
[
 
$
t
y
p
e
 
]
 
[
 
$
r
e
s
o
u
c
e
_
i
d
 
]
 
[
]
 
=
 
a
r
r
a
y
(

	
	
	
	
	
	
	
	
'
l
a
r
g
e
'
 
=
>
 
$
r
e
l
_
p
a
t
h
.
$
r
e
s
o
u
c
e
_
i
d
.
'
/
'
.
$
i
m
a
g
e
,

	
	
	
	
	
	
	
	
'
m
e
d
i
u
m
'
 
=
>
 
$
r
e
l
_
p
a
t
h
.
$
r
e
s
o
u
c
e
_
i
d
.
'
/
m
e
d
i
u
m
/
'
.
$
i
m
a
g
e
,

	
	
	
	
	
	
	
	
'
s
m
a
l
l
'
 
=
>
 
$
r
e
l
_
p
a
t
h
.
$
r
e
s
o
u
c
e
_
i
d
.
'
/
t
h
u
m
b
n
a
i
l
/
'
.
$
i
m
a
g
e
,

	
	
	
	
	
	
	
	
)
;

	
	
	
	
	
	
}

	
	
	
	
	
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
e
 
d
i
r
 
i
s
 
e
m
p
t
y

	
	
	
	
	
	
$
t
h
i
s
-
>
s
i
t
e
_
i
m
a
g
e
s
 
[
 
$
t
y
p
e
 
]
 
[
 
$
r
e
s
o
u
c
e
_
i
d
 
]
 
[
]
 
=
 
a
r
r
a
y
(

	
	
	
	
	
	
	
	
'
l
a
r
g
e
'
 
=
>
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
 
'
n
o
i
m
a
g
e
-
l
a
r
g
e
'
 
]
,

	
	
	
	
	
	
	
	
'
m
e
d
i
u
m
'
 
=
>
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
 
'
n
o
i
m
a
g
e
-
m
e
d
i
u
m
'
 
]
,

	
	
	
	
	
	
	
	
'
s
m
a
l
l
'
 
=
>
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
 
'
n
o
i
m
a
g
e
-
s
m
a
l
l
'
 
]
,

	
	
	
	
	
	
	
	
)
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
r
e
s
o
u
r
c
e
_
i
m
a
g
e
s
 
=
 
s
c
a
n
d
i
r
_
g
e
t
f
i
l
e
s
(
$
b
a
s
e
_
p
a
t
h
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
o
u
r
c
e
_
i
m
a
g
e
s
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
o
u
r
c
e
_
i
m
a
g
e
s
 
a
s
 
$
i
m
a
g
e
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
i
t
e
_
i
m
a
g
e
s
 
[
 
$
t
y
p
e
 
]
 
[
]
 
=
 
a
r
r
a
y
(

	
	
	
	
	
	
	
'
l
a
r
g
e
'
 
=
>
 
$
r
e
l
_
p
a
t
h
.
$
i
m
a
g
e
,

	
	
	
	
	
	
	
'
m
e
d
i
u
m
'
 
=
>
 
$
r
e
l
_
p
a
t
h
.
'
m
e
d
i
u
m
/
'
.
$
i
m
a
g
e
,

	
	
	
	
	
	
	
'
s
m
a
l
l
'
 
=
>
 
$
r
e
l
_
p
a
t
h
.
'
t
h
u
m
b
n
a
i
l
/
'
.
$
i
m
a
g
e
,

	
	
	
	
	
	
	
)
;

	
	
	
	
	
}

	
	
	
	
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
e
 
d
i
r
 
i
s
 
e
m
p
t
y

	
	
	
	
	
$
t
h
i
s
-
>
s
i
t
e
_
i
m
a
g
e
s
 
[
 
$
t
y
p
e
 
]
 
[
]
 
=
 
a
r
r
a
y
(

	
	
	
	
	
	
	
'
l
a
r
g
e
'
 
=
>
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
 
'
n
o
i
m
a
g
e
-
l
a
r
g
e
'
 
]
,

	
	
	
	
	
	
	
'
m
e
d
i
u
m
'
 
=
>
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
 
'
n
o
i
m
a
g
e
-
m
e
d
i
u
m
'
 
]
,

	
	
	
	
	
	
	
'
s
m
a
l
l
'
 
=
>
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
 
'
n
o
i
m
a
g
e
-
s
m
a
l
l
'
 
]
,

	
	
	
	
	
	
	
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
 
$
t
h
i
s
-
>
s
i
t
e
_
i
m
a
g
e
s
;

 
 
 
 
}

	

	
/
/
g
e
t
 
s
i
t
e
 
i
m
a
g
e
s
 
f
r
o
m
 
d
b
.
 
n
o
t
 
r
e
a
l
l
y
 
a
 
"
m
u
l
t
i
"

	
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
 
g
e
t
_
s
i
t
e
_
i
m
a
g
e
s
_
m
u
l
t
i
_
f
r
o
m
_
d
b
(
$
t
y
p
e
 
=
 
'
'
)

	
{

	
	
i
f
 
(
$
t
y
p
e
 
=
=
 
'
'
)
 
{

	
	
	
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


	
	
$
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
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
m
c
H
a
n
d
l
e
r
'
)
;

	
	
$
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
-
>
t
r
i
g
g
e
r
E
v
e
n
t
(
'
1
1
0
1
0
'
)
;

	
	
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
 
=
 
$
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
-
>
m
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
D
a
t
a
[
'
1
1
0
1
0
'
]
;

	
	

	
	
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
r
e
s
o
u
r
c
e
_
t
y
p
e
s
)
)

	
	
	
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


	
	
/
/
s
e
c
u
r
i
t
y
 
c
h
e
c
k

	
	
i
f
 
(
!
i
s
s
e
t
(
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
[
$
t
y
p
e
]
)
)
 
{

	
	
	
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


	
	
$
t
h
i
s
-
>
s
i
t
e
_
i
m
a
g
e
s
[
$
t
y
p
e
]
 
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
r
e
l
_
p
a
t
h
 
=
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
[
$
t
y
p
e
]
[
'
u
p
l
o
a
d
_
r
o
o
t
_
r
e
l
_
p
a
t
h
'
]
.
$
t
y
p
e
.
'
/
'
;


	
	
$
q
u
e
r
y
 
=
 
"
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
,
 

	
	
	
	
	
	
`
r
e
s
o
u
r
c
e
_
t
y
p
e
`
,
 

	
	
	
	
	
	
`
r
e
s
o
u
r
c
e
_
i
d
`
,
 

	
	
	
	
	
	
`
f
i
l
e
n
a
m
e
`
,
 

	
	
	
	
	
	
`
v
e
r
s
i
o
n
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
i
m
a
g
e
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
_
u
i
d
`
 
=
 
0
 

	
	
	
	
	
	
A
N
D
 
`
r
e
s
o
u
r
c
e
_
t
y
p
e
`
 
=
 
'
"
.
$
t
y
p
e
.
"
'
 

	
	
	
	
	
O
R
D
E
R
 
B
Y
 
`
f
i
l
e
n
a
m
e
`
 
A
S
C
 
"
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

	
	
	
i
f
 
(
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
[
$
t
y
p
e
]
[
'
r
e
s
o
u
r
c
e
_
i
d
_
r
e
q
u
i
r
e
d
'
]
)
 
{

	
	
	
	
i
f
 
(
$
r
-
>
v
e
r
s
i
o
n
 
=
=
 
'
l
a
r
g
e
'
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
i
t
e
_
i
m
a
g
e
s
 
[
 
$
t
y
p
e
 
]
 
[
 
$
r
-
>
r
e
s
o
u
r
c
e
_
i
d
 
]
 
[
$
r
-
>
f
i
l
e
n
a
m
e
]
 
[
'
l
a
r
g
e
'
]
 
=
 

	
	
	
	
	
	
$
r
e
l
_
p
a
t
h
.
$
r
-
>
r
e
s
o
u
r
c
e
_
i
d
.
'
/
'
.
$
r
-
>
f
i
l
e
n
a
m
e
;

	
	
	
	
}
 
e
l
s
e
i
f
 
(
$
r
-
>
v
e
r
s
i
o
n
 
=
=
 
'
s
m
a
l
l
'
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
i
t
e
_
i
m
a
g
e
s
 
[
 
$
t
y
p
e
 
]
 
[
 
$
r
-
>
r
e
s
o
u
r
c
e
_
i
d
 
]
 
[
$
r
-
>
f
i
l
e
n
a
m
e
]
 
[
'
s
m
a
l
l
'
]
 
=
 

	
	
	
	
	
	
$
r
e
l
_
p
a
t
h
.
$
r
-
>
r
e
s
o
u
r
c
e
_
i
d
.
'
/
t
h
u
m
b
n
a
i
l
/
'
.
$
r
-
>
f
i
l
e
n
a
m
e
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
s
i
t
e
_
i
m
a
g
e
s
 
[
 
$
t
y
p
e
 
]
 
[
 
$
r
-
>
r
e
s
o
u
r
c
e
_
i
d
 
]
 
[
$
r
-
>
f
i
l
e
n
a
m
e
]
 
[
'
m
e
d
i
u
m
'
]
 
=
 

	
	
	
	
	
	
$
r
e
l
_
p
a
t
h
.
$
r
-
>
r
e
s
o
u
r
c
e
_
i
d
.
'
/
'
.
$
r
-
>
v
e
r
s
i
o
n
.
'
/
'
.
$
r
-
>
f
i
l
e
n
a
m
e
;

	
	
	
	
}

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
i
f
 
(
$
r
-
>
v
e
r
s
i
o
n
 
=
=
 
'
l
a
r
g
e
'
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
i
t
e
_
i
m
a
g
e
s
 
[
 
$
t
y
p
e
 
]
 
[
$
r
-
>
f
i
l
e
n
a
m
e
]
 
[
'
l
a
r
g
e
'
]
 
=
 

	
	
	
	
	
	
$
r
e
l
_
p
a
t
h
.
$
r
-
>
f
i
l
e
n
a
m
e
;

	
	
	
	
}
 
e
l
s
e
i
f
 
(
$
r
-
>
v
e
r
s
i
o
n
 
=
=
 
'
s
m
a
l
l
'
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
i
t
e
_
i
m
a
g
e
s
 
[
 
$
t
y
p
e
 
]
 
[
$
r
-
>
f
i
l
e
n
a
m
e
]
 
[
'
s
m
a
l
l
'
]
 
=
 

	
	
	
	
	
	
$
r
e
l
_
p
a
t
h
.
'
t
h
u
m
b
n
a
i
l
/
'
.
$
r
-
>
f
i
l
e
n
a
m
e
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
s
i
t
e
_
i
m
a
g
e
s
 
[
 
$
t
y
p
e
 
]
 
[
$
r
-
>
f
i
l
e
n
a
m
e
]
 
[
'
m
e
d
i
u
m
'
]
 
=
 

	
	
	
	
	
	
$
r
e
l
_
p
a
t
h
.
$
r
-
>
v
e
r
s
i
o
n
.
'
/
'
.
$
r
-
>
f
i
l
e
n
a
m
e
;

	
	
	
	
}

	
	
	
}

	
	
}


	
	
/
/
w
e
 
h
a
v
e
 
t
o
 
r
e
s
e
t
 
t
h
e
 
k
e
y
 
f
i
l
e
 
n
a
m
e
s
 
i
n
 
t
h
e
 
a
r
r
a
y
,
 
b
e
c
a
u
s
e
 
o
t
h
e
r
 
c
o
d
e
 
u
s
e
s
 
0
 
a
s
 
k
e
y
 
f
o
r
 
f
i
r
s
t
 
i
m
a
g
e

	
	
/
/
u
g
l
y
 
s
o
l
u
t
i
o
n
,
 
b
u
t
 
h
a
s
 
t
o
 
b
e
 
d
o
n
e
 
t
o
 
a
v
o
i
d
 
c
h
a
n
g
i
n
g
 
t
h
e
 
c
o
d
e
 
i
n
 
l
o
t
s
 
o
f
 
p
l
a
c
e
s

	
	
i
f
 
(
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
[
$
t
y
p
e
]
[
'
r
e
s
o
u
r
c
e
_
i
d
_
r
e
q
u
i
r
e
d
'
]
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
t
h
i
s
-
>
s
i
t
e
_
i
m
a
g
e
s
[
$
t
y
p
e
]
 
a
s
 
$
k
 
=
>
 
$
v
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
i
t
e
_
i
m
a
g
e
s
[
$
t
y
p
e
]
[
$
k
]
 
=
 
a
r
r
a
y
_
v
a
l
u
e
s
(
$
v
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
s
i
t
e
_
i
m
a
g
e
s
[
$
t
y
p
e
]
 
=
 
a
r
r
a
y
_
v
a
l
u
e
s
(
$
t
h
i
s
-
>
s
i
t
e
_
i
m
a
g
e
s
[
$
t
y
p
e
]
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
/
d
o
 
j
o
m
r
e
s
 
s
p
e
c
i
f
i
c
 
s
t
u
f
f
 
f
o
r
 
t
h
e
 
n
e
w
l
y
 
u
p
l
o
a
d
e
d
 
i
m
a
g
e

	
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
 
h
a
n
d
l
e
_
u
p
l
o
a
d
e
d
_
i
m
a
g
e
(
$
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
 
=
 
0
,
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
 
=
 
'
'
,
 
$
r
e
s
o
u
r
c
e
_
i
d
 
=
 
'
'
,
 
$
f
i
l
e
_
n
a
m
e
 
=
 
'
'
,
 
$
v
e
r
s
i
o
n
 
=
 
'
'
,
 
$
r
e
s
o
u
r
c
e
_
i
d
_
r
e
q
u
i
r
e
d
 
=
 
t
r
u
e
)

	
{

	
	
i
f
 
(
!
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
_
d
b
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


	
	
i
f
 
(
$
r
e
s
o
u
r
c
e
_
t
y
p
e
 
=
=
 
'
'
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
 
R
e
s
o
u
r
c
e
 
t
y
p
e
 
e
m
p
t
y
.
'
)
;

	
	
}

	
	

	
	
i
f
 
(
$
r
e
s
o
u
r
c
e
_
i
d
_
r
e
q
u
i
r
e
d
 
&
&
 
$
r
e
s
o
u
r
c
e
_
i
d
 
=
=
 
'
'
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
 
R
e
s
o
u
r
c
e
 
i
d
 
r
e
q
u
i
r
e
d
 
i
s
 
e
m
p
t
y
.
'
)
;

	
	
}

	
	

	
	
i
f
 
(
$
f
i
l
e
_
n
a
m
e
 
=
=
 
'
'
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
 
F
i
l
e
 
n
a
m
e
 
e
m
p
t
y
.
'
)
;

	
	
}

	
	

	
	
/
/
s
a
v
e
 
i
m
a
g
e
 
d
e
t
a
i
l
s
 
t
o
 
d
b

	
	
$
t
h
i
s
-
>
s
a
v
e
_
i
m
a
g
e
_
d
e
t
a
i
l
s
_
t
o
_
d
b
(
$
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
,
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
,
 
$
r
e
s
o
u
r
c
e
_
i
d
,
 
$
f
i
l
e
_
n
a
m
e
,
 
$
v
e
r
s
i
o
n
,
 
$
r
e
s
o
u
r
c
e
_
i
d
_
r
e
q
u
i
r
e
d
)
;

	
	

	
	
/
/
g
e
n
e
r
a
t
e
 
i
m
a
g
e
 
p
a
t
h
 
f
r
o
m
 
t
h
e
 
a
v
a
i
l
a
b
l
e
 
d
a
t
a

	
	
$
f
i
l
e
p
a
t
h
 
=
 
$
t
h
i
s
-
>
b
u
i
l
d
_
i
m
a
g
e
_
p
a
t
h
(
$
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
,
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
,
 
$
r
e
s
o
u
r
c
e
_
i
d
,
 
$
f
i
l
e
_
n
a
m
e
,
 
$
v
e
r
s
i
o
n
,
 
$
r
e
s
o
u
r
c
e
_
i
d
_
r
e
q
u
i
r
e
d
)
;

	
	

	
	
/
/
o
p
t
i
m
i
z
e
 
i
m
a
g
e
,
 
i
f
 
e
n
a
b
l
e
d

	
	
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
o
p
t
i
m
i
z
e
_
i
m
a
g
e
s
)
 
{

	
	
	
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
_
o
p
t
i
m
i
z
e
r
 
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
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
_
o
p
t
i
m
i
z
e
r
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
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
_
o
p
t
i
m
i
z
e
r
-
>
o
p
t
i
m
i
z
e
(
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
$
f
i
l
e
p
a
t
h
)
;

	
	
}

	
	

	
	
/
/
c
o
p
y
 
i
m
a
g
e
 
t
o
 
a
m
a
z
o
n
 
s
3
,
 
i
f
 
e
n
a
b
l
e
d

	
	
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
u
s
e
_
s
3
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
o
p
y
_
i
m
a
g
e
_
t
o
_
s
3
(
$
f
i
l
e
p
a
t
h
)
;

	
	
}

	
}

	

	
/
/
s
a
v
e
 
i
m
a
g
e
 
d
e
t
a
i
l
s
 
t
o
 
d
b

	
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
 
s
a
v
e
_
i
m
a
g
e
_
d
e
t
a
i
l
s
_
t
o
_
d
b
(
$
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
 
=
 
0
,
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
 
=
 
'
'
,
 
$
r
e
s
o
u
r
c
e
_
i
d
 
=
 
'
'
,
 
$
f
i
l
e
_
n
a
m
e
 
=
 
'
'
,
 
$
v
e
r
s
i
o
n
 
=
 
'
'
,
 
$
r
e
s
o
u
r
c
e
_
i
d
_
r
e
q
u
i
r
e
d
 
=
 
t
r
u
e
)

	
{

	
	
i
f
 
(
$
v
e
r
s
i
o
n
 
=
=
 
'
'
)
 
{

	
	
	
$
v
e
r
s
i
o
n
 
=
 
'
l
a
r
g
e
'
;

	
	
}

	
	

	
	
i
f
 
(
$
v
e
r
s
i
o
n
 
=
=
 
'
t
h
u
m
b
n
a
i
l
'
)
 
{

	
	
	
$
v
e
r
s
i
o
n
 
=
 
'
s
m
a
l
l
'
;

	
	
}


	
	
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
i
m
a
g
e
s
 
(

	
	
	
	
	
	
	
	
	
	
	
	
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
,
 

	
	
	
	
	
	
	
	
	
	
	
	
`
r
e
s
o
u
r
c
e
_
t
y
p
e
`
,
 

	
	
	
	
	
	
	
	
	
	
	
	
`
r
e
s
o
u
r
c
e
_
i
d
`
,
 

	
	
	
	
	
	
	
	
	
	
	
	
`
f
i
l
e
n
a
m
e
`
,
 

	
	
	
	
	
	
	
	
	
	
	
	
`
v
e
r
s
i
o
n
`

	
	
	
	
	
	
	
	
	
	
	
	
)
 

	
	
	
	
	
	
	
	
	
	
V
A
L
U
E
S
 
(

	
	
	
	
	
	
	
	
	
	
	
	
"
.
(
i
n
t
)
$
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
.
"
,

	
	
	
	
	
	
	
	
	
	
	
	
'
"
.
$
r
e
s
o
u
r
c
e
_
t
y
p
e
.
"
'
,

	
	
	
	
	
	
	
	
	
	
	
	
'
"
.
$
r
e
s
o
u
r
c
e
_
i
d
.
"
'
,

	
	
	
	
	
	
	
	
	
	
	
	
'
"
.
$
f
i
l
e
_
n
a
m
e
.
"
'
,

	
	
	
	
	
	
	
	
	
	
	
	
'
"
.
$
v
e
r
s
i
o
n
.
"
'

	
	
	
	
	
	
	
	
	
	
	
	
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
E
r
r
o
r
:
 
C
o
u
l
d
 
n
o
t
 
i
n
s
e
r
t
 
i
m
a
g
e
s
 
i
n
 
d
b
'
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
/
d
e
l
e
t
e
 
i
m
a
g
e
 
f
r
o
m
 
d
i
s
k
 
a
n
d
 
d
b

	
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
 
d
e
l
e
t
e
_
i
m
a
g
e
(
$
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
 
=
 
0
,
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
 
=
 
'
'
,
 
$
r
e
s
o
u
r
c
e
_
i
d
 
=
 
'
'
,
 
$
f
i
l
e
_
n
a
m
e
 
=
 
'
'
,
 
$
a
b
s
_
p
a
t
h
 
=
 
'
'
,
 
$
r
e
s
o
u
r
c
e
_
i
d
_
r
e
q
u
i
r
e
d
 
=
 
t
r
u
e
)

	
{

	
	
/
/
f
i
r
s
t
 
w
e
`
l
l
 
c
h
e
c
k
 
i
f
 
w
e
 
h
a
v
e
 
a
l
l
 
a
r
g
s
 
w
e
 
n
e
e
d

	
	
i
f
 
(
$
r
e
s
o
u
r
c
e
_
t
y
p
e
 
=
=
 
'
'
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
 
R
e
s
o
u
r
c
e
 
t
y
p
e
 
e
m
p
t
y
.
'
)
;

	
	
}

	
	

	
	
i
f
 
(
$
r
e
s
o
u
r
c
e
_
i
d
_
r
e
q
u
i
r
e
d
 
&
&
 
$
r
e
s
o
u
r
c
e
_
i
d
 
=
=
 
'
'
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
 
R
e
s
o
u
r
c
e
 
i
d
 
r
e
q
u
i
r
e
d
 
i
s
 
e
m
p
t
y
.
'
)
;

	
	
}

	
	

	
	
i
f
 
(
$
f
i
l
e
_
n
a
m
e
 
=
=
 
'
'
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
 
F
i
l
e
 
n
a
m
e
 
e
m
p
t
y
.
'
)
;

	
	
}

	
	

	
	
i
f
 
(
$
a
b
s
_
p
a
t
h
 
=
=
 
'
'
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
 
A
b
s
 
p
a
t
h
 
e
m
p
t
y
.
'
)
;

	
	
}

	
	

	
	
/
/
d
e
l
e
t
e
 
f
i
l
e
s
 
f
r
o
m
 
d
i
s
k

	
	
$
p
a
s
s
e
d
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 

	
	
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
$
a
b
s
_
p
a
t
h
.
$
f
i
l
e
_
n
a
m
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
u
n
l
i
n
k
(
$
a
b
s
_
p
a
t
h
.
$
f
i
l
e
_
n
a
m
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
"
E
r
r
o
r
,
 
m
e
d
i
a
 
c
e
n
t
r
e
 
c
o
u
l
d
n
'
t
 
d
e
l
e
t
e
 
"
.
$
a
b
s
_
p
a
t
h
.
$
f
i
l
e
_
n
a
m
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
s
s
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

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
$
a
b
s
_
p
a
t
h
.
'
m
e
d
i
u
m
'
.
J
R
D
S
.
$
f
i
l
e
_
n
a
m
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
u
n
l
i
n
k
(
$
a
b
s
_
p
a
t
h
.
'
m
e
d
i
u
m
'
.
J
R
D
S
.
$
f
i
l
e
_
n
a
m
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
"
E
r
r
o
r
,
 
m
e
d
i
a
 
c
e
n
t
r
e
 
c
o
u
l
d
n
'
t
 
d
e
l
e
t
e
 
"
.
$
a
b
s
_
p
a
t
h
.
'
m
e
d
i
u
m
'
.
J
R
D
S
.
$
f
i
l
e
_
n
a
m
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
s
s
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

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
$
a
b
s
_
p
a
t
h
.
'
t
h
u
m
b
n
a
i
l
'
.
J
R
D
S
.
$
f
i
l
e
_
n
a
m
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
u
n
l
i
n
k
(
$
a
b
s
_
p
a
t
h
.
'
t
h
u
m
b
n
a
i
l
'
.
J
R
D
S
.
$
f
i
l
e
_
n
a
m
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
"
E
r
r
o
r
,
 
m
e
d
i
a
 
c
e
n
t
r
e
 
c
o
u
l
d
n
'
t
 
d
e
l
e
t
e
 
"
.
$
a
b
s
_
p
a
t
h
.
'
t
h
u
m
b
n
a
i
l
'
.
J
R
D
S
.
$
f
i
l
e
_
n
a
m
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
s
s
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

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
p
a
s
s
e
d
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
u
s
e
_
d
b
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
D
E
L
E
T
E
 
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
i
m
a
g
e
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
_
u
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
.
"
 

	
	
	
	
	
	
	
	
	
A
N
D
 
`
r
e
s
o
u
r
c
e
_
t
y
p
e
`
 
=
 
'
"
.
$
r
e
s
o
u
r
c
e
_
t
y
p
e
.
"
'
 

	
	
	
	
	
	
	
	
	
A
N
D
 
`
r
e
s
o
u
r
c
e
_
i
d
`
 
=
 
'
"
.
$
r
e
s
o
u
r
c
e
_
i
d
.
"
'
 

	
	
	
	
	
	
	
	
	
A
N
D
 
`
f
i
l
e
n
a
m
e
`
 
=
 
'
"
.
$
f
i
l
e
_
n
a
m
e
.
"
'
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
E
r
r
o
r
:
 
D
e
l
e
t
e
 
i
m
a
g
e
 
f
r
o
m
 
d
b
 
f
a
i
l
e
d
.
'
)
;

	
	
	
	
}

	
	
	
}

	
	
	

	
	
	
/
/
d
e
l
e
t
e
 
i
m
a
g
e
 
f
r
o
m
 
a
m
a
z
o
n
 
s
3

	
	
	
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
u
s
e
_
s
3
)
 
{

	
	
	
	
/
/
b
u
i
l
d
 
i
m
a
g
e
 
p
a
t
h
 
f
r
o
m
 
t
h
e
 
a
v
a
i
l
a
b
l
e
 
d
a
t
a

	
	
	
	
$
i
m
a
g
e
_
l
a
r
g
e
 
=
 
$
t
h
i
s
-
>
b
u
i
l
d
_
i
m
a
g
e
_
p
a
t
h
(
$
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
,
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
,
 
$
r
e
s
o
u
r
c
e
_
i
d
,
 
$
f
i
l
e
_
n
a
m
e
,
 
'
'
,
 
$
r
e
s
o
u
r
c
e
_
i
d
_
r
e
q
u
i
r
e
d
)
;

	
	
	
	
$
i
m
a
g
e
_
m
e
d
i
u
m
 
=
 
$
t
h
i
s
-
>
b
u
i
l
d
_
i
m
a
g
e
_
p
a
t
h
(
$
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
,
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
,
 
$
r
e
s
o
u
r
c
e
_
i
d
,
 
$
f
i
l
e
_
n
a
m
e
,
 
'
m
e
d
i
u
m
'
,
 
$
r
e
s
o
u
r
c
e
_
i
d
_
r
e
q
u
i
r
e
d
)
;

	
	
	
	
$
i
m
a
g
e
_
s
m
a
l
l
 
=
 
$
t
h
i
s
-
>
b
u
i
l
d
_
i
m
a
g
e
_
p
a
t
h
(
$
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
,
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
,
 
$
r
e
s
o
u
r
c
e
_
i
d
,
 
$
f
i
l
e
_
n
a
m
e
,
 
'
t
h
u
m
b
n
a
i
l
'
,
 
$
r
e
s
o
u
r
c
e
_
i
d
_
r
e
q
u
i
r
e
d
)
;

	
	
	
	

	
	
	
	
/
/
d
e
l
e
t
e
 
i
m
a
g
e
 
f
r
o
m
 
s
3

	
	
	
	
$
t
h
i
s
-
>
d
e
l
e
t
e
_
i
m
a
g
e
_
f
r
o
m
_
s
3
(
$
i
m
a
g
e
_
l
a
r
g
e
)
;

	
	
	
	
$
t
h
i
s
-
>
d
e
l
e
t
e
_
i
m
a
g
e
_
f
r
o
m
_
s
3
(
$
i
m
a
g
e
_
m
e
d
i
u
m
)
;

	
	
	
	
$
t
h
i
s
-
>
d
e
l
e
t
e
_
i
m
a
g
e
_
f
r
o
m
_
s
3
(
$
i
m
a
g
e
_
s
m
a
l
l
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
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
d
e
l
e
t
e
 
i
m
a
g
e
 
f
r
o
m
 
d
i
s
k
 
a
n
d
 
d
b

	
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
 
d
e
l
e
t
e
_
a
l
l
_
i
m
a
g
e
s
(
$
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
 
=
 
0
)

	
{

	
	
/
/
f
i
r
s
t
 
w
e
`
l
l
 
c
h
e
c
k
 
i
f
 
w
e
 
h
a
v
e
 
a
l
l
 
a
r
g
s
 
w
e
 
n
e
e
d

	
	
i
f
 
(
$
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
 
P
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
 
n
o
t
 
s
e
t
.
'
)
;

	
	
}

 
 
 
 
 
 
 
 

	
	
/
/
d
e
l
e
t
e
 
i
m
a
g
e
 
f
r
o
m
 
d
b

	
	
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
u
s
e
_
d
b
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
D
E
L
E
T
E
 
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
i
m
a
g
e
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
_
u
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
E
r
r
o
r
:
 
D
e
l
e
t
i
n
g
 
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
y
 
i
m
a
g
e
s
 
f
r
o
m
 
d
b
 
f
a
i
l
e
d
.
'
)
;

	
	
	
}

	
	
}

	
	

	
	
/
/
m
o
u
n
t
 
j
o
m
r
e
s
 
f
i
l
e
s
y
s
t
e
m

	
	
$
f
i
l
e
s
y
s
t
e
m
 
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
f
i
l
e
s
y
s
t
e
m
'
)
-
>
g
e
t
F
i
l
e
s
y
s
t
e
m
(
)
;


	
	
/
/
d
e
l
e
t
e
 
i
m
a
g
e
s
 
f
r
o
m
 
d
i
s
k

	
	
$
f
i
l
e
s
y
s
t
e
m
-
>
d
e
l
e
t
e
D
i
r
(
'
l
o
c
a
l
:
/
/
u
p
l
o
a
d
e
d
i
m
a
g
e
s
/
'
.
$
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
)
;

	
	

	
	
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
u
s
e
_
s
3
)
 
{

	
	
	
$
f
i
l
e
s
y
s
t
e
m
-
>
d
e
l
e
t
e
D
i
r
(
'
s
3
:
/
/
u
p
l
o
a
d
e
d
i
m
a
g
e
s
/
'
.
$
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
 
c
o
p
y
_
i
m
a
g
e
_
t
o
_
s
3
(
$
i
m
a
g
e
 
=
 
'
'
)

	
{

	
	
i
f
 
(
$
i
m
a
g
e
 
=
=
 
'
'
)
 
{

	
	
	
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
m
o
u
n
t
 
j
o
m
r
e
s
 
f
i
l
e
s
y
s
t
e
m

	
	
$
f
i
l
e
s
y
s
t
e
m
 
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
f
i
l
e
s
y
s
t
e
m
'
)
-
>
g
e
t
F
i
l
e
s
y
s
t
e
m
(
)
;

	
	

	
	
/
/
c
h
e
c
k
 
i
f
 
i
m
a
g
e
 
a
l
r
e
a
d
y
 
e
x
i
s
t
s

	
	
i
f
 
(
$
f
i
l
e
s
y
s
t
e
m
-
>
h
a
s
(
'
s
3
:
/
/
u
p
l
o
a
d
e
d
i
m
a
g
e
s
/
'
.
$
i
m
a
g
e
)
)
 
{

	
	
	
$
f
i
l
e
s
y
s
t
e
m
-
>
d
e
l
e
t
e
(
'
s
3
:
/
/
u
p
l
o
a
d
e
d
i
m
a
g
e
s
/
'
.
$
i
m
a
g
e
)
;

	
	
}

	
	

	
	
/
/
c
o
p
y
 
i
m
a
g
e

	
	
$
f
i
l
e
s
y
s
t
e
m
-
>
c
o
p
y
(
'
l
o
c
a
l
:
/
/
u
p
l
o
a
d
e
d
i
m
a
g
e
s
/
'
.
$
i
m
a
g
e
,
 
'
s
3
:
/
/
u
p
l
o
a
d
e
d
i
m
a
g
e
s
/
'
.
$
i
m
a
g
e
)
;

	
	

	
	
/
*
 
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
j
r
C
o
n
f
i
g
[
'
a
m
a
z
o
n
_
s
3
_
r
e
m
o
v
e
_
l
o
c
a
l
_
c
o
p
i
e
s
'
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
f
i
l
e
s
y
s
t
e
m
-
>
d
e
l
e
t
e
(
'
l
o
c
a
l
:
/
/
u
p
l
o
a
d
e
d
i
m
a
g
e
s
/
'
.
$
i
m
a
g
e
)
;

	
	
}
 
*
/

	
	

	
	
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
 
d
e
l
e
t
e
_
i
m
a
g
e
_
f
r
o
m
_
s
3
(
$
i
m
a
g
e
 
=
 
'
'
)

	
{

	
	
i
f
 
(
$
i
m
a
g
e
 
=
=
 
'
'
)
 
{

	
	
	
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
m
o
u
n
t
 
j
o
m
r
e
s
 
f
i
l
e
s
y
s
t
e
m

	
	
$
f
i
l
e
s
y
s
t
e
m
 
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
f
i
l
e
s
y
s
t
e
m
'
)
-
>
g
e
t
F
i
l
e
s
y
s
t
e
m
(
)
;

	
	

	
	
/
/
d
e
l
e
t
e
 
i
m
a
g
e

	
	
$
f
i
l
e
s
y
s
t
e
m
-
>
d
e
l
e
t
e
(
'
s
3
:
/
/
u
p
l
o
a
d
e
d
i
m
a
g
e
s
/
'
.
$
i
m
a
g
e
)
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
 
b
u
i
l
d
_
i
m
a
g
e
_
p
a
t
h
(
$
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
 
=
 
0
,
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
 
=
 
'
'
,
 
$
r
e
s
o
u
r
c
e
_
i
d
 
=
 
'
'
,
 
$
f
i
l
e
_
n
a
m
e
 
=
 
'
'
,
 
$
v
e
r
s
i
o
n
 
=
 
'
'
,
 
$
r
e
s
o
u
r
c
e
_
i
d
_
r
e
q
u
i
r
e
d
 
=
 
t
r
u
e
)
 

	
{

	
	
$
i
m
a
g
e
 
=
 
'
'
;

	
	

	
	
i
f
 
(
$
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
 
!
=
 
0
)
 
{

	
	
	
$
i
m
a
g
e
 
.
=
 
$
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
.
'
/
'
;

	
	
}

	
	

	
	
i
f
 
(
$
r
e
s
o
u
r
c
e
_
t
y
p
e
 
!
=
 
'
'
)
 
{

	
	
	
$
i
m
a
g
e
 
.
=
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
.
'
/
'
;

	
	
}

	
	

	
	
i
f
 
(
$
r
e
s
o
u
r
c
e
_
i
d
 
!
=
 
'
'
 
&
&
 
$
r
e
s
o
u
r
c
e
_
i
d
_
r
e
q
u
i
r
e
d
)
 
{

	
	
	
$
i
m
a
g
e
 
.
=
 
$
r
e
s
o
u
r
c
e
_
i
d
.
'
/
'
;

	
	
}

	
	

	
	
i
f
 
(
$
v
e
r
s
i
o
n
 
!
=
 
'
'
)
 
{

	
	
	
$
i
m
a
g
e
 
.
=
 
$
v
e
r
s
i
o
n
.
'
/
'
;

	
	
}

	
	

	
	
i
f
 
(
$
f
i
l
e
_
n
a
m
e
 
!
=
 
'
'
)
 
{

	
	
	
$
i
m
a
g
e
 
.
=
 
$
f
i
l
e
_
n
a
m
e
;

	
	
}

	
	

	
	
r
e
t
u
r
n
 
$
i
m
a
g
e
;

	
}

}

