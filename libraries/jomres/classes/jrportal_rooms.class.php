
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
r
o
o
m
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
r
o
o
m
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
r
o
o
m
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
r
o
o
m
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
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
 
=
 
0
;
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
n
e
w
 
r
o
o
m
 
i
d
 
d
e
f
a
u
l
t

 
 
 
 
 
 
 
 
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
s
_
u
i
d
 
=
 
0
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
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
 
i
d

 
 
 
 
 
 
 
 
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
_
f
e
a
t
u
r
e
s
_
u
i
d
 
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
 
a
r
r
a
y

 
 
 
 
 
 
 
 
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
_
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
 
r
o
o
m
 
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
r
o
o
m
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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
r
o
o
m
 
n
u
m
b
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
o
o
m
_
f
l
o
o
r
 
=
 
'
'
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
r
o
o
m
 
f
l
o
o
r

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
a
x
_
p
e
o
p
l
e
 
=
 
1
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
r
o
o
m
`
s
 
m
a
x
 
g
u
e
s
t
s

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
i
n
g
l
e
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
 
=
 
'
'
;
 
 
 
 
/
/
 
s
i
n
g
l
e
 
p
e
r
s
o
n
 
s
u
p
p
l
i
m
e
n
t

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
a
g
l
i
n
e
 
=
 
'
'
;
 
 
 
 
 
 
 
 
 
 
/
/
 
1
0
0
0
 
c
h
a
r
s
 
m
a
x
i
m
u
m

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
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
'
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
3
0
0
0
 
c
h
a
r
s
 
m
a
x
i
m
u
m

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
/
/
m
u
l
t
i
p
l
e
 
r
o
o
m
s
 
c
r
e
a
t
i
o
n

 
 
 
 
 
 
 
 
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
g
e
n
e
r
a
t
o
r
 
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
 
d
a
t
a
 
u
s
e
d
 
t
o
 
m
a
s
s
 
c
r
e
a
t
e
 
r
o
o
m
s

 
 
 
 
 
 
 
 
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
g
e
n
e
r
a
t
o
r
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
s
_
u
i
d
'
]
 
=
 
0
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
r
o
o
m
s
_
g
e
n
e
r
a
t
o
r
[
'
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
'
]
 
=
 
0
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
h
o
w
 
m
a
n
y
 
r
o
o
m
s
 
t
o
 
b
e
 
c
r
e
a
t
e
d

 
 
 
 
 
 
 
 
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
g
e
n
e
r
a
t
o
r
[
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
]
 
=
 
0
;
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
w
h
a
t
 
r
o
o
m
 
t
y
p
e
 
t
o
 
b
e
 
u
s
e
d
 
f
o
r
 
t
h
e
 
m
a
s
s
 
c
r
e
a
t
e
d
 
r
o
o
m
s

 
 
 
 
 
 
 
 
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
g
e
n
e
r
a
t
o
r
[
'
m
a
x
_
p
e
o
p
l
e
'
]
 
=
 
0
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
m
a
x
 
g
u
e
s
t
s
 
p
e
r
 
r
o
o
m

 
 
 
 
 
 
 
 
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
g
e
n
e
r
a
t
o
r
[
'
d
e
l
e
t
e
_
e
x
i
s
t
i
n
g
_
r
o
o
m
s
'
]
 
=
 
f
a
l
s
e
;
 
 
 
 
/
/
 
d
e
l
e
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
 
r
o
o
m
s
 
b
e
f
o
r
e
 
m
a
s
s
 
c
r
e
a
t
i
n
g
 
n
e
w
 
o
n
e
s

 
 
 
 
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
 
r
o
o
m

 
 
 
 
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
r
o
o
m
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
r
o
o
m
_
u
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
 
R
o
o
m
 
u
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
 
r
o
o
m
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
r
o
o
m
_
c
l
a
s
s
e
s
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
 
R
o
o
m
 
t
y
p
e
 
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
s
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
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
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
s
_
u
i
d
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
_
f
e
a
t
u
r
e
s
_
u
i
d
)
)
 
{

	
	
	
$
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
 
=
 
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
_
f
e
a
t
u
r
e
s
_
u
i
d
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
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
 
=
 
'
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
 
'
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
r
o
o
m
s
 

	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
`
r
o
o
m
_
c
l
a
s
s
e
s
_
u
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
s
_
u
i
d
`
,

	
	
	
	
	
	
	
`
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
_
u
i
d
`
,

	
	
	
	
	
	
	
`
r
o
o
m
_
n
a
m
e
`
,

	
	
	
	
	
	
	
`
r
o
o
m
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
r
o
o
m
_
f
l
o
o
r
`
,

	
	
	
	
	
	
	
`
m
a
x
_
p
e
o
p
l
e
`
,

	
	
	
	
	
	
	
`
s
i
n
g
l
e
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
`
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
`
t
a
g
l
i
n
e
`
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
`
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
_
c
l
a
s
s
e
s
_
u
i
d
.
'
,

	
	
	
	
	
	
	
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
s
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
_
f
e
a
t
u
r
e
s
_
u
i
d
)
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
o
o
m
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
o
o
m
_
f
l
o
o
r
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
m
a
x
_
p
e
o
p
l
e
.
'
,

	
	
	
	
	
	
	
'
 
.
(
f
l
o
a
t
)
 
$
t
h
i
s
-
>
s
i
n
g
l
e
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
.
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
"
'
 
.
(
s
t
r
i
n
g
)
 
$
t
h
i
s
-
>
t
a
g
l
i
n
e
.
'
"
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
"
'
 
.
(
s
t
r
i
n
g
)
 
$
t
h
i
s
-
>
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
.
'
"

	
	
	
	
	
	
	
)
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
o
o
m
_
u
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
r
o
o
m
_
u
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
 
r
o
o
m
 
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

	
	

	
	
u
p
d
a
t
e
C
u
s
t
o
m
T
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
_
T
A
G
L
I
N
E
'
.
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
_
u
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
t
a
g
l
i
n
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
u
p
d
a
t
e
C
u
s
t
o
m
T
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
_
D
E
S
C
R
I
P
T
I
O
N
_
'
.
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
_
u
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
,
 
t
r
u
e
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
s
i
n
g
l
e
R
o
o
m
P
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
=
 
'
1
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
p
d
a
t
e
_
t
a
r
i
f
f
s
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
s
_
u
i
d
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
r
o
o
m
_
a
d
d
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
 
a
 
r
o
o
m
 
i
s
 
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
s
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
r
o
o
m
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
r
o
o
m
_
u
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
 
r
o
o
m

 
 
 
 
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
r
o
o
m
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
r
o
o
m
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
 
R
o
o
m
 
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
r
o
o
m
_
c
l
a
s
s
e
s
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
 
R
o
o
m
 
t
y
p
e
 
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
s
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
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
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
s
_
u
i
d
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
_
f
e
a
t
u
r
e
s
_
u
i
d
)
)
 
{

	
	
	
$
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
 
=
 
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
_
f
e
a
t
u
r
e
s
_
u
i
d
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
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
 
=
 
'
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
r
o
o
m
s
 

	
	
	
	
	
S
E
T
 

	
	
	
	
	
	
`
r
o
o
m
_
c
l
a
s
s
e
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
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
.
"
,

	
	
	
	
	
	
`
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
_
u
i
d
`
 
 
 
 
 
 
 
 
 
=
 
'
"
.
$
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
.
"
'
,

	
	
	
	
	
	
`
r
o
o
m
_
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
r
o
o
m
_
n
a
m
e
.
"
'
,

	
	
	
	
	
	
`
r
o
o
m
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
r
o
o
m
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
r
o
o
m
_
f
l
o
o
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
r
o
o
m
_
f
l
o
o
r
.
"
'
,

	
	
	
	
	
	
`
m
a
x
_
p
e
o
p
l
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
m
a
x
_
p
e
o
p
l
e
.
'
,

	
	
	
	
	
	
`
s
i
n
g
l
e
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
`
 
 
 
=
 
'
 
.
(
f
l
o
a
t
)
 
$
t
h
i
s
-
>
s
i
n
g
l
e
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
.
'
 
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
`
t
a
g
l
i
n
e
`
 
 
 
 
 
 
 
 
 
	
	
	
=
 
"
'
 
.
(
s
t
r
i
n
g
)
 
$
t
h
i
s
-
>
t
a
g
l
i
n
e
.
'
"
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
`
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
`
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
"
'
 
.
(
s
t
r
i
n
g
)
 
$
t
h
i
s
-
>
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
.
'
"
 

	
	
	
	
	
W
H
E
R
E
 
`
r
o
o
m
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
r
o
o
m
_
u
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
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
S
A
V
E
_
U
P
D
A
T
E
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
S
A
V
E
_
U
P
D
A
T
E
'
,
 
f
a
l
s
e
)
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
 
R
o
o
m
 
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
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
u
p
d
a
t
e
C
u
s
t
o
m
T
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
_
T
A
G
L
I
N
E
'
.
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
_
u
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
t
a
g
l
i
n
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
u
p
d
a
t
e
C
u
s
t
o
m
T
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
_
D
E
S
C
R
I
P
T
I
O
N
_
'
.
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
_
u
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
,
 
t
r
u
e
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
s
i
n
g
l
e
R
o
o
m
P
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
=
 
'
1
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
p
d
a
t
e
_
t
a
r
i
f
f
s
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
s
_
u
i
d
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
r
o
o
m
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
 
a
 
r
o
o
m
 
i
s
 
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
s
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
r
o
o
m
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
r
o
o
m
_
u
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
 
u
p
d
a
t
e
_
t
a
r
i
f
f
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
r
a
t
e
s
 
S
E
T
 
`
r
o
o
m
c
l
a
s
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
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
.
'
 
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
s
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
 
j
r
_
g
e
t
t
e
x
t
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
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
T
A
R
I
F
F
'
,
 
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
T
A
R
I
F
F
'
,
 
f
a
l
s
e
)
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
 
T
a
r
i
f
f
 
r
o
o
m
 
t
y
p
e
 
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
c
o
m
p
_
t
a
r
i
f
f
t
y
p
e
_
r
a
t
e
_
x
r
e
f
 
S
E
T
 
`
r
o
o
m
c
l
a
s
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
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
.
'
 
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
s
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
 
j
r
_
g
e
t
t
e
x
t
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
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
T
A
R
I
F
F
'
,
 
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
T
A
R
I
F
F
'
,
 
f
a
l
s
e
)
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
 
T
a
r
i
f
f
 
t
y
p
e
 
x
r
e
f
 
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
.
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
D
e
l
e
t
e
 
r
o
o
m

 
 
 
 
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
r
o
o
m
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
r
o
o
m
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
 
R
o
o
m
 
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
r
o
o
m
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
r
o
o
m
s
 
W
H
E
R
E
 
`
r
o
o
m
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
r
o
o
m
_
u
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
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
R
O
O
M
_
D
E
L
E
T
E
D
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
R
O
O
M
_
D
E
L
E
T
E
D
'
,
 
f
a
l
s
e
)
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
 
r
o
o
m
 
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
r
o
o
m
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
 
a
 
r
o
o
m
 
i
s
 
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
s
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
r
o
o
m
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
r
o
o
m
_
u
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
 
t
h
e
 
r
o
o
m
 
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
o
o
m
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
r
o
o
m
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
 
R
o
o
m
 
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
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
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
s
_
u
i
d
)
;


 
 
 
 
 
 
 
 
/
/
i
f
 
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
s
 
a
 
S
R
P
,
 
t
h
i
s
 
r
o
o
m
 
c
a
n
`
t
 
b
e
 
d
e
l
e
t
e
d

 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
s
i
n
g
l
e
R
o
o
m
P
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
=
 
'
1
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
r
o
o
m
_
b
o
o
k
i
n
g
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
r
o
o
m
_
b
o
o
k
i
n
g
s
 
W
H
E
R
E
 
`
r
o
o
m
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
r
o
o
m
_
u
i
d
.
'
 
A
N
D
 
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
s
_
u
i
d
.
"
 
A
N
D
 
D
A
T
E
_
F
O
R
M
A
T
(
`
d
a
t
e
`
,
 
'
%
Y
/
%
m
/
%
d
'
)
 
>
=
 
D
A
T
E
_
F
O
R
M
A
T
(
'
"
.
d
a
t
e
(
'
Y
/
m
/
d
'
)
.
"
'
,
 
'
%
Y
/
%
m
/
%
d
'
)
 
L
I
M
I
T
 
1
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
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
/
/
C
r
e
a
t
e
 
m
u
l
t
i
p
l
e
 
r
o
o
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
r
o
o
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
r
o
o
m
s
_
g
e
n
e
r
a
t
o
r
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
s
_
u
i
d
'
]
 
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
r
o
o
m
s
_
g
e
n
e
r
a
t
o
r
[
'
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
'
]
 
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
 
N
u
m
b
e
r
 
o
f
 
r
o
o
m
s
 
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
r
o
o
m
s
_
g
e
n
e
r
a
t
o
r
[
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
]
 
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
 
R
o
o
m
 
t
y
p
e
 
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
r
o
o
m
s
_
g
e
n
e
r
a
t
o
r
[
'
m
a
x
_
p
e
o
p
l
e
'
]
 
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
 
M
a
x
 
p
e
o
p
l
e
 
p
e
r
 
r
o
o
m
 
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
 
e
x
i
s
t
i
n
g
 
r
o
o
m
s

 
 
 
 
 
 
 
 
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
r
o
o
m
s
_
g
e
n
e
r
a
t
o
r
[
'
d
e
l
e
t
e
_
e
x
i
s
t
i
n
g
_
r
o
o
m
s
'
]
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
r
o
o
m
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
r
o
o
m
s
_
g
e
n
e
r
a
t
o
r
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
s
_
u
i
d
'
]
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
 
d
e
l
e
t
e
 
a
l
l
 
r
o
o
m
s
.
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
 
W
e
 
n
e
e
d
 
t
o
 
f
i
n
d
 
t
h
e
 
n
e
x
t
 
r
o
o
m
 
n
u
m
b
e
r
 
a
v
a
i
l
a
b
l
e
 
t
o
 
u
s

 
 
 
 
 
 
 
 
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
 
M
A
X
(
`
r
o
o
m
_
n
u
m
b
e
r
`
)
 
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
r
o
o
m
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
r
o
o
m
s
_
g
e
n
e
r
a
t
o
r
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
s
_
u
i
d
'
]
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
n
e
x
t
R
o
o
m
N
u
m
b
e
r
 
=
 
(
i
n
t
)
 
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
$
n
e
x
t
R
o
o
m
N
u
m
b
e
r
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
x
t
R
o
o
m
N
u
m
b
e
r
 
=
 
1
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
r
o
o
m
s
 

	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
`
r
o
o
m
_
c
l
a
s
s
e
s
_
u
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
s
_
u
i
d
`
,

	
	
	
	
	
	
	
`
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
_
u
i
d
`
,

	
	
	
	
	
	
	
`
r
o
o
m
_
n
a
m
e
`
,

	
	
	
	
	
	
	
`
r
o
o
m
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
r
o
o
m
_
f
l
o
o
r
`
,

	
	
	
	
	
	
	
`
m
a
x
_
p
e
o
p
l
e
`
,

	
	
	
	
	
	
	
`
s
i
n
g
l
e
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
`

	
	
	
	
	
	
	
)

	
	
	
	
	
	
V
A
L
U
E
S
 
'
;


 
 
 
 
 
 
 
 
f
o
r
 
(
$
i
 
=
 
1
;
 
$
i
 
<
=
 
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
g
e
n
e
r
a
t
o
r
[
'
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
'
]
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
n
e
x
t
R
o
o
m
N
u
m
b
e
r
 
<
 
1
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
x
t
R
o
o
m
N
u
m
b
e
r
S
t
r
 
=
 
'
0
'
.
(
s
t
r
i
n
g
)
 
$
n
e
x
t
R
o
o
m
N
u
m
b
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
x
t
R
o
o
m
N
u
m
b
e
r
S
t
r
 
=
 
(
s
t
r
i
n
g
)
 
$
n
e
x
t
R
o
o
m
N
u
m
b
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
.
=
 
'

	
	
	
	
	
	
(

	
	
	
	
	
	
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
r
o
o
m
s
_
g
e
n
e
r
a
t
o
r
[
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
]
.
'
,

	
	
	
	
	
	
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
r
o
o
m
s
_
g
e
n
e
r
a
t
o
r
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
s
_
u
i
d
'
]
.
"
,

	
	
	
	
	
	
'
'
,

	
	
	
	
	
	
'
'
,

	
	
	
	
	
	
'
"
.
$
n
e
x
t
R
o
o
m
N
u
m
b
e
r
S
t
r
.
"
'
,

	
	
	
	
	
	
'
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
r
o
o
m
s
_
g
e
n
e
r
a
t
o
r
[
'
m
a
x
_
p
e
o
p
l
e
'
]
.
'
,

	
	
	
	
	
	
0

	
	
	
	
	
	
)
,
'
;

 
 
 
 
 
 
 
 
 
 
 
 
+
+
$
n
e
x
t
R
o
o
m
N
u
m
b
e
r
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
r
t
r
i
m
(
$
q
u
e
r
y
,
 
'
,
'
)
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
 
m
a
s
s
 
g
e
n
e
r
a
t
e
 
r
o
o
m
s
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
r
o
o
m
s
_
m
u
l
t
i
p
l
e
_
a
d
d
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
 
m
u
l
i
t
i
p
l
e
 
r
o
o
m
s
 
a
r
e
 
a
d
d
e
d
.
 
 
B
e
c
a
u
s
e
 
m
u
l
t
i
p
l
e
 
r
o
o
m
s
 
h
a
v
e
 
b
e
e
n
 
a
d
d
e
d
,
 
t
h
e
 
r
e
m
o
t
e
 
s
e
r
v
i
c
e
 
i
s
 
a
d
v
i
s
e
d
 
t
o
 
c
o
m
p
l
e
t
e
l
y
 
r
e
f
r
e
s
h
 
t
h
e
i
r
 
r
o
o
m
s
 
l
i
s
t
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
r
o
o
m
s
_
g
e
n
e
r
a
t
o
r
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
s
_
u
i
d
'
]
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

}

