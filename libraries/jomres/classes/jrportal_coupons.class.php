
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
r
p
o
r
t
a
l
_
c
o
u
p
o
n
s

{

 
 
 
 
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
c
o
u
p
o
n
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
c
o
u
p
o
n
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
i
d
 
=
 
0
;
 
/
/
 
c
o
u
p
o
n
_
i
d

	
	
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
p
o
n
_
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
v
a
l
i
d
_
f
r
o
m
 
=
 
d
a
t
e
(
"
Y
-
m
-
d
"
)
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
l
i
d
_
t
o
 
=
 
d
a
t
e
(
"
Y
-
m
-
d
"
)
;

	
	
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
 
=
 
d
a
t
e
(
"
Y
-
m
-
d
"
)
;

	
	
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
 
=
 
d
a
t
e
(
"
Y
-
m
-
d
"
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
m
o
u
n
t
 
=
 
0
.
0
0
;

	
	
$
t
h
i
s
-
>
i
s
_
p
e
r
c
e
n
t
a
g
e
 
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
r
o
o
m
s
_
o
n
l
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
g
u
e
s
t
_
u
i
d
 
=
 
0
;

 
 
 
 
}

	

	
/
/
G
e
t
 
c
o
u
p
o
n
 
d
e
t
a
i
l
s
 
b
y
 
i
d

 
 
 
 
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
c
o
u
p
o
n
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
o
u
p
o
n
 
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

	
	

	
	
$
t
h
i
s
J
R
U
s
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
r
_
u
s
e
r
'
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
 
&
&
 
!
$
t
h
i
s
J
R
U
s
e
r
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
c
o
u
p
o
n
_
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
c
o
u
p
o
n
_
c
o
d
e
`
,

	
	
	
	
	
`
v
a
l
i
d
_
f
r
o
m
`
,

	
	
	
	
	
`
v
a
l
i
d
_
t
o
`
,

	
	
	
	
	
`
a
m
o
u
n
t
`
,
 

	
	
	
	
	
`
i
s
_
p
e
r
c
e
n
t
a
g
e
`
,

	
	
	
	
	
`
r
o
o
m
s
_
o
n
l
y
`
,
	
	
	
	
	

	
	
	
	
	
`
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
`
,

	
	
	
	
	
`
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
`
,

	
	
	
	
	
`
g
u
e
s
t
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
c
o
u
p
o
n
s
 
 

	
	
	
	
W
H
E
R
E
 
`
c
o
u
p
o
n
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
.
"
 
A
N
D
 
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
t
h
i
s
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
i
d
 
=
 
(
i
n
t
)
$
r
-
>
c
o
u
p
o
n
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
 
(
i
n
t
)
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
p
o
n
_
c
o
d
e
 
=
 
$
r
-
>
c
o
u
p
o
n
_
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
v
a
l
i
d
_
f
r
o
m
 
=
 
$
r
-
>
v
a
l
i
d
_
f
r
o
m
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
l
i
d
_
t
o
 
=
 
$
r
-
>
v
a
l
i
d
_
t
o
;

	
	
	
$
t
h
i
s
-
>
a
m
o
u
n
t
 
=
 
$
r
-
>
a
m
o
u
n
t
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
s
_
p
e
r
c
e
n
t
a
g
e
 
=
 
(
i
n
t
)
$
r
-
>
i
s
_
p
e
r
c
e
n
t
a
g
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
s
_
o
n
l
y
 
=
 
(
i
n
t
)
$
r
-
>
r
o
o
m
s
_
o
n
l
y
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
 
=
 
$
r
-
>
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
;

	
	
	
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
 
=
 
$
r
-
>
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
u
e
s
t
_
u
i
d
 
=
 
(
i
n
t
)
$
r
-
>
g
u
e
s
t
_
u
i
d
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
S
a
v
e
 
n
e
w
 
c
o
u
p
o
n

 
 
 
 
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
o
m
m
i
t
_
n
e
w
_
c
o
u
p
o
n
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
 
>
 
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
o
u
p
o
n
 
i
d
 
a
l
r
e
a
d
y
 
s
e
t
.
 
A
r
e
 
y
o
u
 
s
u
r
e
 
y
o
u
`
r
e
 
c
r
e
a
t
i
n
g
 
a
 
n
e
w
 
c
o
u
p
o
n
?
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
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
r
_
u
s
e
r
'
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
 
&
&
 
!
$
t
h
i
s
J
R
U
s
e
r
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

	
	

	
	
$
v
a
l
i
d
_
f
r
o
m
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
/
'
,
'
-
'
,
$
t
h
i
s
-
>
v
a
l
i
d
_
f
r
o
m
)
;

	
	
$
v
a
l
i
d
_
t
o
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
/
'
,
'
-
'
,
$
t
h
i
s
-
>
v
a
l
i
d
_
t
o
)
;

	
	
$
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
/
'
,
'
-
'
,
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
)
;

	
	
$
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
/
'
,
'
-
'
,
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
)
;


 
 
 
 
 
 
 
 
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
c
o
u
p
o
n
s

	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
`
c
o
u
p
o
n
_
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
c
o
u
p
o
n
_
c
o
d
e
`
,

	
	
	
	
	
	
	
`
v
a
l
i
d
_
f
r
o
m
`
,

	
	
	
	
	
	
	
`
v
a
l
i
d
_
t
o
`
,

	
	
	
	
	
	
	
`
a
m
o
u
n
t
`
,

	
	
	
	
	
	
	
`
i
s
_
p
e
r
c
e
n
t
a
g
e
`
,

	
	
	
	
	
	
	
`
r
o
o
m
s
_
o
n
l
y
`
,

	
	
	
	
	
	
	
`
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
`
,
 

	
	
	
	
	
	
	
`
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
`
,
 

	
	
	
	
	
	
	
`
g
u
e
s
t
_
u
i
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
,

	
	
	
	
	
	
	
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
t
h
i
s
-
>
c
o
u
p
o
n
_
c
o
d
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
a
l
i
d
_
f
r
o
m
.
"
'
,

	
	
	
	
	
	
	
'
"
.
$
v
a
l
i
d
_
t
o
.
"
'
,

	
	
	
	
	
	
	
"
.
$
t
h
i
s
-
>
a
m
o
u
n
t
.
"
,

	
	
	
	
	
	
	
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
s
_
p
e
r
c
e
n
t
a
g
e
.
"
,

	
	
	
	
	
	
	
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
r
o
o
m
s
_
o
n
l
y
.
"
,

	
	
	
	
	
	
	
'
"
.
$
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
.
"
'
,

	
	
	
	
	
	
	
'
"
.
$
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
.
"
'
,

	
	
	
	
	
	
	
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
g
u
e
s
t
_
u
i
d
.
"

	
	
	
	
	
	
	
)
"
;

 
 
 
 
 
 
 
 
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
;

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
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
i
d
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
 
N
e
w
 
c
o
u
p
o
n
 
i
n
s
e
r
t
 
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

	
	

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
c
o
u
p
o
n
_
s
a
v
e
d
'
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
d
e
s
c
r
i
p
t
i
o
n
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
c
o
u
p
o
n
 
a
d
d
e
d
.
'
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
c
o
r
e
'
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
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
 
 
 
 
 
 
 
 
 
 
 
=
 
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

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
-
>
c
o
u
p
o
n
_
i
d
 
 
 
 
 
 
 
 
 
	
	
=
 
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

 
 
 
 
 
 
 
 
a
d
d
_
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
(
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
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


 
 
 
 
/
/
U
p
d
a
t
e
 
e
x
i
s
t
i
n
g
 
c
o
u
p
o
n

 
 
 
 
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
o
m
m
i
t
_
u
p
d
a
t
e
_
c
o
u
p
o
n
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
o
u
p
o
n
 
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


 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
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
r
_
u
s
e
r
'
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
 
&
&
 
!
$
t
h
i
s
J
R
U
s
e
r
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

	
	

	
	
$
v
a
l
i
d
_
f
r
o
m
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
/
'
,
'
-
'
,
$
t
h
i
s
-
>
v
a
l
i
d
_
f
r
o
m
)
;

	
	
$
v
a
l
i
d
_
t
o
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
/
'
,
'
-
'
,
$
t
h
i
s
-
>
v
a
l
i
d
_
t
o
)
;

	
	
$
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
/
'
,
'
-
'
,
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
)
;

	
	
$
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
/
'
,
'
-
'
,
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
)
;


 
 
 
 
 
 
 
 
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
c
o
u
p
o
n
s
 

	
	
	
	
	
S
E
T
 

	
	
	
	
	
	
`
c
o
u
p
o
n
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
.
"
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

	
	
	
	
	
	
`
c
o
u
p
o
n
_
c
o
d
e
`
 
=
 
'
"
.
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
p
o
n
_
c
o
d
e
.
"
'
,

	
	
	
	
	
	
`
v
a
l
i
d
_
f
r
o
m
`
 
=
 
'
"
.
$
v
a
l
i
d
_
f
r
o
m
.
"
'
,

	
	
	
	
	
	
`
v
a
l
i
d
_
t
o
`
 
=
 
'
"
.
$
v
a
l
i
d
_
t
o
.
"
'
,

	
	
	
	
	
	
`
a
m
o
u
n
t
`
 
=
 
"
.
$
t
h
i
s
-
>
a
m
o
u
n
t
.
"
,

	
	
	
	
	
	
`
i
s
_
p
e
r
c
e
n
t
a
g
e
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
s
_
p
e
r
c
e
n
t
a
g
e
.
"
,

	
	
	
	
	
	
`
r
o
o
m
s
_
o
n
l
y
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
r
o
o
m
s
_
o
n
l
y
.
"
,
 

	
	
	
	
	
	
`
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
`
 
=
 
'
"
.
$
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
.
"
'
,
 

	
	
	
	
	
	
`
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
`
 
=
 
'
"
.
$
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
.
"
'
,
 

	
	
	
	
	
	
`
g
u
e
s
t
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
t
h
i
s
-
>
g
u
e
s
t
_
u
i
d
.
"
 

	
	
	
	
	
W
H
E
R
E
 
`
c
o
u
p
o
n
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
.
"
 

	
	
	
	
	
	
A
N
D
 
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
t
h
i
s
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
p
o
n
 
u
p
d
a
t
e
 
i
n
t
e
r
t
 
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

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
c
o
u
p
o
n
_
u
p
d
a
t
e
d
'
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
d
e
s
c
r
i
p
t
i
o
n
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
c
o
u
p
o
n
 
u
p
d
a
t
e
d
.
'
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
c
o
r
e
'
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
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
 
 
 
 
 
 
 
 
 
 
 
=
 
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

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
-
>
c
o
u
p
o
n
_
i
d
 
 
 
 
 
 
 
 
 
	
	
=
 
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

 
 
 
 
 
 
 
 
a
d
d
_
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
(
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
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


 
 
 
 
/
/
D
e
l
e
t
e
 
c
o
u
p
o
n

 
 
 
 
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
c
o
u
p
o
n
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
o
u
p
o
n
 
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


 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
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
r
_
u
s
e
r
'
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
 
&
&
 
!
$
t
h
i
s
J
R
U
s
e
r
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
g
e
t
_
c
o
u
p
o
n
(
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
c
o
u
p
o
n
s
 
W
H
E
R
E
 
`
c
o
u
p
o
n
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
 
A
N
D
 
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
e
 
c
o
u
p
o
n
 
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


	
	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
c
o
u
p
o
n
_
d
e
l
e
t
e
d
'
;

	
	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
d
e
s
c
r
i
p
t
i
o
n
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
c
o
u
p
o
n
 
d
e
l
e
t
e
d
.
'
;

	
	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
c
o
r
e
'
;

	
	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
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
 
 
 
 
 
 
 
 
 
 
 
=
 
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

	
	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
-
>
c
o
u
p
o
n
_
i
d
 
 
 
 
 
 
 
 
	
	
=
 
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

	
	
	
a
d
d
_
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
(
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
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

