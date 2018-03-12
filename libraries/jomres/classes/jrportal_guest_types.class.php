
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
_
t
y
p
e
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
_
t
y
p
e
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
_
t
y
p
e
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
t
y
p
e
 
=
 
'
'
;
 
 
 
 
 
 
 
 
/
/
 
g
u
e
s
t
 
t
y
p
e
 
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
n
o
t
e
s
 
=
 
'
'
;
 
 
 
 
 
 
 
 
/
/
 
g
u
e
s
t
 
t
y
p
e
 
n
o
t
e
s
 
-
 
i
n
t
e
r
n
a
l
 
n
o
t
e
s
,
 
n
o
t
 
v
i
s
i
b
l
e
 
i
n
 
t
h
e
 
f
r
o
n
t
e
n
d

 
 
 
 
 
 
 
 
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
i
m
u
m
 
=
 
'
1
0
'
;
 
 
 
 
 
 
 
 
/
/
 
m
a
x
i
m
u
m
 
n
u
m
b
e
r
 
o
f
 
t
h
i
s
 
g
u
e
s
t
 
t
y
p
e

 
 
 
 
 
 
 
 
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
 
0
;
 
 
 
 
 
 
 
 
/
/
 
0
/
1
 
v
a
r
i
a
n
c
e
 
i
s
 
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
 
o
r
 
n
o
t

 
 
 
 
 
 
 
 
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
n
e
g
 
=
 
0
;
 
 
 
 
 
 
 
 
/
/
 
0
/
1
 
v
a
r
i
a
n
c
e
 
i
s
 
p
o
s
i
t
i
v
e
 
o
r
 
n
e
g
a
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
v
a
r
i
a
n
c
e
 
=
 
0
;
 
 
 
 
 
 
 
 
/
/
 
v
a
r
i
a
n
c
e
 
a
m
o
u
n
t

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
u
b
l
i
s
h
e
d
 
=
 
1
;
 
 
 
 
 
 
 
 
/
/
 
p
u
b
l
i
s
h
e
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
 
-
 
0
 
f
o
r
 
g
l
o
b
a
l
 
g
u
e
s
t
 
t
y
p
e
s

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
o
r
d
e
r
 
=
 
0
;
 
 
 
 
 
 
 
 
/
/
 
o
r
d
e
r
 
o
f
 
g
u
e
s
t
 
t
y
p
e
 
d
r
o
p
d
o
w
n
s
 
o
n
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m

 
 
 
 
 
 
 
 
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
c
h
i
l
d
 
=
 
0
;
 
 
 
 
 
 
 
 
/
/
 
t
h
i
s
 
g
u
e
s
t
 
t
y
p
e
 
i
s
 
a
 
c
h
i
l
d
 
-
 
u
s
e
d
 
o
n
 
c
h
a
n
n
e
l
 
m
a
n
a
g
e
r
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
x
r
e
f
 
	
	
	
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
 
T
O
D
O
:
 
n
o
t
 
u
s
e
d
 
y
e
t
 
f
o
r
 
g
l
o
b
a
l
 
g
u
e
s
t
 
t
y
p
e
s
 
-
 
g
u
e
s
t
 
t
y
p
e
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
x
r
e
f

 
 
 
 
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
 
t
y
p
e
 
d
e
t
a
i
l
s
 
b
y
 
g
u
e
s
t
 
t
y
p
e
 
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
_
t
y
p
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
 
G
u
e
s
t
 
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
i
d
`
,

	
	
	
	
	
`
t
y
p
e
`
,

	
	
	
	
	
`
n
o
t
e
s
`
,

	
	
	
	
	
`
m
a
x
i
m
u
m
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
p
o
s
n
e
g
`
,

	
	
	
	
	
`
v
a
r
i
a
n
c
e
`
,

	
	
	
	
	
`
p
u
b
l
i
s
h
e
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
o
r
d
e
r
`
,

	
	
	
	
	
`
i
s
_
c
h
i
l
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
c
u
s
t
o
m
e
r
t
y
p
e
s
`
 

	
	
	
	
W
H
E
R
E
 
`
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
t
y
p
e
 
=
 
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
G
U
E
S
T
T
Y
P
E
'
.
$
r
-
>
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
-
>
t
y
p
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
n
o
t
e
s
 
=
 
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
G
U
E
S
T
N
O
T
E
S
'
.
$
r
-
>
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
-
>
n
o
t
e
s
)
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
a
x
i
m
u
m
 
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
a
x
i
m
u
m
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
p
o
s
n
e
g
 
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
o
s
n
e
g
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
r
i
a
n
c
e
 
=
 
(
f
l
o
a
t
)
 
$
r
-
>
v
a
r
i
a
n
c
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
u
b
l
i
s
h
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
p
u
b
l
i
s
h
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
o
r
d
e
r
 
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
o
r
d
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
i
s
_
c
h
i
l
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
i
s
_
c
h
i
l
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
 
t
y
p
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
_
t
y
p
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
 
t
y
p
e
 
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
 
t
y
p
e
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
 
/
/
T
O
D
O
 
t
o
 
b
e
 
r
e
m
o
v
e
d
 
l
a
t
e
r
 
f
o
r
 
g
l
o
b
a
l
 
g
u
e
s
t
 
t
y
p
e
s

 
 
 
 
 
 
 
 
 
 
 
 
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
u
s
t
o
m
e
r
t
y
p
e
s
 

	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
`
i
d
`
,

	
	
	
	
	
	
	
`
t
y
p
e
`
,

	
	
	
	
	
	
	
`
n
o
t
e
s
`
,

	
	
	
	
	
	
	
`
m
a
x
i
m
u
m
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
p
o
s
n
e
g
`
,

	
	
	
	
	
	
	
`
v
a
r
i
a
n
c
e
`
,

	
	
	
	
	
	
	
`
p
u
b
l
i
s
h
e
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
o
r
d
e
r
`
,
 

	
	
	
	
	
	
	
`
i
s
_
c
h
i
l
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
t
h
i
s
-
>
n
o
t
e
s
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
i
m
u
m
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
p
o
s
n
e
g
.
"
,

	
	
	
	
	
	
	
"
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
v
a
r
i
a
n
c
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
p
u
b
l
i
s
h
e
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
o
r
d
e
r
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
c
h
i
l
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
I
N
S
E
R
T
_
C
U
S
T
O
M
E
R
T
Y
P
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
M
R
_
A
U
D
I
T
_
I
N
S
E
R
T
_
C
U
S
T
O
M
E
R
T
Y
P
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
 
t
y
p
e
 
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
t
y
p
e
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
 
t
y
p
e
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
t
y
p
e
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
 
t
y
p
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
_
t
y
p
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
 
G
u
e
s
t
 
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
u
s
t
o
m
e
r
t
y
p
e
s
 

	
	
	
	
	
S
E
T
 

	
	
	
	
	
	
`
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
h
i
s
-
>
t
y
p
e
.
"
'
,

	
	
	
	
	
	
`
n
o
t
e
s
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
n
o
t
e
s
.
"
'
,

	
	
	
	
	
	
`
m
a
x
i
m
u
m
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
i
m
u
m
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
p
o
s
n
e
g
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
o
s
n
e
g
.
"
,

	
	
	
	
	
	
`
v
a
r
i
a
n
c
e
`
 
=
 
"
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
v
a
r
i
a
n
c
e
.
"
,

	
	
	
	
	
	
`
i
s
_
c
h
i
l
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
s
_
c
h
i
l
d
.
"
 

	
	
	
	
	
W
H
E
R
E
 
`
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
C
U
S
T
O
M
E
R
T
Y
P
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
C
U
S
T
O
M
E
R
T
Y
P
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
 
G
u
e
s
t
 
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
t
y
p
e
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
 
t
y
p
e
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
t
y
p
e
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
 
t
y
p
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
_
t
y
p
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
 
G
u
e
s
t
 
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
u
s
t
o
m
e
r
t
y
p
e
s
 
W
H
E
R
E
 
`
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
D
E
L
E
T
E
_
C
U
S
T
O
M
E
R
T
Y
P
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
M
R
_
A
U
D
I
T
_
D
E
L
E
T
E
_
C
U
S
T
O
M
E
R
T
Y
P
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
 
t
y
p
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
t
y
p
e
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
 
t
y
p
e
 
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
t
y
p
e
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
P
u
b
l
i
s
h
/
u
n
p
u
b
l
i
s
h
 
g
u
e
s
t
 
t
y
p
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
 
p
u
b
l
i
s
h
_
g
u
e
s
t
_
t
y
p
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
 
G
u
e
s
t
 
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
S
E
L
E
C
T
 
`
p
u
b
l
i
s
h
e
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
u
s
t
o
m
e
r
t
y
p
e
s
 
W
H
E
R
E
 
`
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
$
r
e
s
u
l
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
u
b
l
i
s
h
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
e
s
u
l
t
[
0
]
-
>
p
u
b
l
i
s
h
e
d
;


 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
u
b
l
i
s
h
e
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
u
b
l
i
s
h
e
d
 
=
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
u
b
l
i
s
h
e
d
 
=
 
0
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
c
u
s
t
o
m
e
r
t
y
p
e
s
 
S
E
T
 
`
p
u
b
l
i
s
h
e
d
`
 
=
 
'
.
$
p
u
b
l
i
s
h
e
d
.
'
 
W
H
E
R
E
 
`
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
 
P
u
b
l
i
s
h
/
u
n
p
u
b
l
i
s
h
 
g
u
e
s
t
 
t
y
p
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
G
u
e
s
t
 
t
y
p
e
 
o
r
d
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
 
s
a
v
e
_
g
u
e
s
t
_
t
y
p
e
_
o
r
d
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
c
u
s
t
o
m
e
r
t
y
p
e
s
 
S
E
T
 
`
o
r
d
e
r
`
 
=
 
'
.
$
t
h
i
s
-
>
o
r
d
e
r
.
'
 
W
H
E
R
E
 
`
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
R
E
O
R
D
E
R
_
C
U
S
T
O
M
E
R
T
Y
P
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
M
R
_
A
U
D
I
T
_
R
E
O
R
D
E
R
_
C
U
S
T
O
M
E
R
T
Y
P
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
 
O
r
d
e
r
i
n
g
 
g
u
e
s
t
 
t
y
p
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

}

