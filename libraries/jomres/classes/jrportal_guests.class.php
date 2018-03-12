
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
g
u
e
s
t
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
g
u
e
s
t
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
g
u
e
s
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
d
 
=
 
0
;
 
/
/
 
g
u
e
s
t
_
u
i
d

 
 
 
 
 
 
 
 
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
 
/
/
 
m
o
s
_
u
s
e
r
i
d
 
t
h
e
 
c
m
s
 
u
s
e
r
 
i
d

	
	
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
 
/
/
c
o
u
n
t
y

	
	
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
d
i
s
c
o
u
n
t
 
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
 
0
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
b
l
a
c
k
l
i
s
t
e
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
p
a
r
t
n
e
r
_
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
 
g
u
e
s
t
 
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
g
u
e
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
 
G
u
e
s
t
 
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
g
u
e
s
t
s
_
u
i
d
`
,

	
	
	
	
	
`
m
o
s
_
u
s
e
r
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
e
m
a
i
l
`
,

	
	
	
	
	
`
d
i
s
c
o
u
n
t
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
t
n
e
r
_
i
d
`
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
`
b
l
a
c
k
l
i
s
t
e
d
`

	
	
	
	
F
R
O
M
 
`
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
s
`
 

	
	
	
	
W
H
E
R
E
 
`
g
u
e
s
t
s
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
g
u
e
s
t
s
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
 
(
i
n
t
)
 
$
r
-
>
m
o
s
_
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
d
i
s
c
o
u
n
t
 
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
d
i
s
c
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
 
(
i
n
t
)
 
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
t
n
e
r
_
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
a
r
t
n
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
b
l
a
c
k
l
i
s
t
e
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
b
l
a
c
k
l
i
s
t
e
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
 
g
u
e
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
g
u
e
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
 
G
u
e
s
t
 
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
 
g
u
e
s
t
?
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
v
a
l
i
d
a
t
e
 
E
U
 
V
A
T
 
i
n
f
o
 
-
 
n
o
t
 
c
u
r
r
e
n
c
l
y
 
n
e
e
d
e
d
 
a
n
y
w
h
e
r
e
 
b
u
t
 
h
e
r
e
 
f
o
r
 
f
u
t
u
r
e
 
u
s
e
.
.

	
	
i
f
 
(
t
r
i
m
(
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
)
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
(
'
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
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
=
 
n
e
w
 
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
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
-
>
v
i
e
s
_
c
h
e
c
k
(
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
-
>
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
m
e
s
s
a
g
e
s
[
 
'
c
l
e
a
n
_
v
a
t
_
n
o
'
 
]
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
 
(
i
n
t
)
$
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
 
h
t
m
l
s
p
e
c
i
a
l
c
h
a
r
s
(
$
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
-
>
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
m
e
s
s
a
g
e
s
[
 
'
m
e
s
s
a
g
e
'
 
]
,
 
E
N
T
_
Q
U
O
T
E
S
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
s

	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
`
g
u
e
s
t
s
_
u
i
d
`
,

	
	
	
	
	
	
	
`
m
o
s
_
u
s
e
r
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
e
m
a
i
l
`
,

	
	
	
	
	
	
	
`
d
i
s
c
o
u
n
t
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
t
n
e
r
_
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
f
i
r
s
t
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
.
"
'
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
h
o
u
s
e
.
"
'
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
s
t
r
e
e
t
.
"
'
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
t
o
w
n
.
"
'
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
r
e
g
i
o
n
.
"
'
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
n
t
r
y
.
"
'
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
p
o
s
t
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
.
"
'
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
e
m
a
i
l
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
d
i
s
c
o
u
n
t
.
"
,

	
	
	
	
	
	
	
'
"
.
t
r
i
m
(
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
)
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
p
a
r
t
n
e
r
_
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
 
g
u
e
s
t
 
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
g
u
e
s
t
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
 
g
u
e
s
t
 
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
 
g
u
e
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
g
u
e
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
 
G
u
e
s
t
 
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
v
a
l
i
d
a
t
e
 
E
U
 
V
A
T
 
i
n
f
o
 
-
 
n
o
t
 
c
u
r
r
e
n
c
l
y
 
n
e
e
d
e
d
 
a
n
y
w
h
e
r
e
 
b
u
t
 
h
e
r
e
 
f
o
r
 
f
u
t
u
r
e
 
u
s
e
.
.

	
	
i
f
 
(
t
r
i
m
(
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
)
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
(
'
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
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
=
 
n
e
w
 
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
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
-
>
v
i
e
s
_
c
h
e
c
k
(
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
-
>
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
m
e
s
s
a
g
e
s
[
 
'
c
l
e
a
n
_
v
a
t
_
n
o
'
 
]
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
 
(
i
n
t
)
$
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
 
h
t
m
l
s
p
e
c
i
a
l
c
h
a
r
s
(
$
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
-
>
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
m
e
s
s
a
g
e
s
[
 
'
m
e
s
s
a
g
e
'
 
]
,
 
E
N
T
_
Q
U
O
T
E
S
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
s
 

	
	
	
	
	
S
E
T
 

	
	
	
	
	
	
`
g
u
e
s
t
s
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
i
d
.
"
,

	
	
	
	
	
	
`
m
o
s
_
u
s
e
r
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
.
"
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
f
i
r
s
t
n
a
m
e
.
"
'
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
s
u
r
n
a
m
e
.
"
'
,

	
	
	
	
	
	
`
h
o
u
s
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
h
o
u
s
e
.
"
'
,

	
	
	
	
	
	
`
s
t
r
e
e
t
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
s
t
r
e
e
t
.
"
'
,

	
	
	
	
	
	
`
t
o
w
n
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
t
o
w
n
.
"
'
,

	
	
	
	
	
	
`
c
o
u
n
t
y
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
r
e
g
i
o
n
.
"
'
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
n
t
r
y
.
"
'
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
p
o
s
t
c
o
d
e
.
"
'
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
.
"
'
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
.
"
'
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
e
m
a
i
l
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
e
m
a
i
l
.
"
'
,

	
	
	
	
	
	
`
d
i
s
c
o
u
n
t
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
d
i
s
c
o
u
n
t
.
"
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
.
"
'
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
.
"
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
.
"
'
,

	
	
	
	
	
	
`
p
a
r
t
n
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
p
a
r
t
n
e
r
_
i
d
.
"
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
`
b
l
a
c
k
l
i
s
t
e
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
b
l
a
c
k
l
i
s
t
e
d
.
"
 
 

	
	
	
	
	
W
H
E
R
E
 
`
g
u
e
s
t
s
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
 
G
u
e
s
t
 
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
g
u
e
s
t
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
 
g
u
e
s
t
 
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
 
g
u
e
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
 
d
e
l
e
t
e
_
g
u
e
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
 
G
u
e
s
t
 
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
g
u
e
s
t
(
)
 
&
&
 
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
c
a
n
_
b
e
_
d
e
l
e
t
e
d
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
g
u
e
s
t
s
 
W
H
E
R
E
 
`
g
u
e
s
t
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
 
g
u
e
s
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
g
u
e
s
t
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
 
g
u
e
s
t
 
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

	

	
/
/
c
h
e
c
k
 
i
f
 
a
 
g
u
e
s
t
 
c
a
n
 
b
e
 
d
e
l
e
t
e
d

	
f
u
n
c
t
i
o
n
 
g
u
e
s
t
_
c
a
n
_
b
e
_
d
e
l
e
t
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
 
G
u
e
s
t
 
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
n
t
r
a
c
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
n
t
r
a
c
t
s
 
W
H
E
R
E
 
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
g
u
e
s
t
_
i
d
_
b
y
_
c
m
s
_
i
d
(
$
c
m
s
_
i
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

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
$
c
m
s
_
i
d
 
=
 
(
i
n
t
)
$
c
m
s
_
i
d
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
g
u
e
s
t
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
 
`
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
s
`
 

	
	
	
	
W
H
E
R
E
 
`
m
o
s
_
u
s
e
r
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
c
m
s
_
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

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
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

	
}

}

