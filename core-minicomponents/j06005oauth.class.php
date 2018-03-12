
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
0
6
0
0
5
o
a
u
t
h

	
{

	
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

	
	
i
f
 
(
 
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
e
m
p
l
a
t
e
_
t
o
u
c
h
 
)

	
	
	
{

	
	
	
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
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
h
o
r
t
c
o
d
e
_
d
a
t
a
 
=
 
a
r
r
a
y
 
(

	
	
	
	
"
t
a
s
k
"
 
=
>
 
"
o
a
u
t
h
"
,

	
	
	
	
"
i
n
f
o
"
 
=
>
 
"
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
5
A
P
I
_
C
O
R
E
_
C
L
I
E
N
T
_
A
D
M
I
N
"
,

	
	
	
	
"
a
r
g
u
m
e
n
t
s
"
 
=
>
 
a
r
r
a
y
 
(
)

	
	
	
	
)
;

	
	
	
r
e
t
u
r
n
;

	
	
	
}


	
	
$
e
P
o
i
n
t
F
i
l
e
p
a
t
h
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
e
P
o
i
n
t
F
i
l
e
p
a
t
h
'
)
;

	
	
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
)

	
	
	
{

	
	
	
$
a
v
a
i
l
a
b
l
e
_
s
c
o
p
e
s
 
=
 
a
r
r
a
y
 
(
 
"
u
s
e
r
"
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

	
	
	
$
a
v
a
i
l
a
b
l
e
_
s
c
o
p
e
s
 
=
 
a
r
r
a
y
 
(
 
"
u
s
e
r
"
 
,
 
"
m
a
n
a
g
e
r
"
 
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
 
&
&
 
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

	
	
	
$
a
v
a
i
l
a
b
l
e
_
s
c
o
p
e
s
 
=
 
a
r
r
a
y
 
(
 
"
u
s
e
r
"
 
,
 
"
m
a
n
a
g
e
r
"
 
,
 
"
s
u
p
e
r
"
 
)
;

	
	
	
}


	
	
$
t
o
o
l
b
a
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
I
t
e
m
T
o
o
l
b
a
r
'
 
)
;

	
	
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
"
j
o
m
r
e
s
_
o
a
u
t
h
_
s
c
o
p
e
s
"
)
;

	
	
$
s
c
o
p
e
s
_
c
l
a
s
s
 
=
 
n
e
w
 
j
o
m
r
e
s
_
o
a
u
t
h
_
s
c
o
p
e
s
(
$
e
P
o
i
n
t
F
i
l
e
p
a
t
h
)
;

	
	
$
a
l
l
_
a
v
a
i
l
a
b
l
e
_
s
c
o
p
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
c
o
p
e
s
_
c
l
a
s
s
-
>
d
e
f
a
u
l
t
_
s
c
o
p
e
s
 
a
s
 
$
c
a
t
e
g
o
r
y
 
=
>
 
$
c
a
t
e
g
o
r
y
_
s
c
o
p
e
s
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
c
a
t
e
g
o
r
y
_
s
c
o
p
e
s
 
a
s
 
$
s
c
o
p
e
)

	
	
	
	
{

	
	
	
	
$
a
l
l
_
a
v
a
i
l
a
b
l
e
_
s
c
o
p
e
s
[
$
s
c
o
p
e
-
>
s
c
o
p
e
]
 
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
$
s
c
o
p
e
-
>
d
e
f
i
n
i
t
i
o
n
 
,
 
$
s
c
o
p
e
-
>
d
e
f
i
n
i
t
i
o
n
 
,
 
f
a
l
s
e
 
)
;

	
	
	
	
}

	
	
	
}

	
	

	
	
$
o
u
t
p
u
t
 
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
o
w
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
o
u
t
p
u
t
[
'
P
A
G
E
T
I
T
L
E
'
]
	
	
	
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
O
A
U
T
H
_
A
P
P
S
'
,
 
'
_
O
A
U
T
H
_
A
P
P
S
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
A
P
I
K
E
Y
'
]
	
	
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
O
A
U
T
H
_
A
P
I
K
E
Y
'
,
 
'
_
O
A
U
T
H
_
A
P
I
K
E
Y
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
I
D
E
N
T
I
F
I
E
R
'
]
	
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
O
A
U
T
H
_
I
D
E
N
T
I
F
I
E
R
'
,
 
'
_
O
A
U
T
H
_
I
D
E
N
T
I
F
I
E
R
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
]
	
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
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
,
 
'
_
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
,
 
f
a
l
s
e
)
;

	
	

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
1
'
]
	
	
	
	
	
	
	
	
	
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
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
1
'
,
 
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
1
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
2
'
]
	
	
	
	
	
	
	
	
	
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
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
2
'
,
 
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
2
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
S
E
C
U
R
I
T
Y
_
T
I
T
L
E
'
]
	
	
	
	
	
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
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
S
E
C
U
R
I
T
Y
_
T
I
T
L
E
'
,
 
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
S
E
C
U
R
I
T
Y
_
T
I
T
L
E
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
S
E
C
U
R
I
T
Y
_
D
E
S
C
'
]
	
	
	
	
	
	
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
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
S
E
C
U
R
I
T
Y
_
D
E
S
C
'
,
 
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
S
E
C
U
R
I
T
Y
_
D
E
S
C
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
E
N
D
_
P
O
I
N
T
_
T
I
T
L
E
'
]
	
	
	
	
	
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
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
E
N
D
_
P
O
I
N
T
_
T
I
T
L
E
'
,
 
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
E
N
D
_
P
O
I
N
T
_
T
I
T
L
E
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
E
N
D
_
P
O
I
N
T
_
D
E
S
C
'
]
	
	
	
	
	
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
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
E
N
D
_
P
O
I
N
T
_
D
E
S
C
'
,
 
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
E
N
D
_
P
O
I
N
T
_
D
E
S
C
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
E
X
A
M
P
L
E
_
S
C
R
I
P
T
'
]
	
	
	
	
	
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
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
E
X
A
M
P
L
E
_
S
C
R
I
P
T
'
,
 
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
E
X
A
M
P
L
E
_
S
C
R
I
P
T
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
A
U
T
H
E
N
T
I
C
A
T
I
O
N
_
T
I
T
L
E
'
]
	
	
	
	
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
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
A
U
T
H
E
N
T
I
C
A
T
I
O
N
_
T
I
T
L
E
'
,
 
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
A
U
T
H
E
N
T
I
C
A
T
I
O
N
_
T
I
T
L
E
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
A
U
T
H
E
N
T
I
C
A
T
I
O
N
_
D
E
S
C
'
]
	
	
	
	
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
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
A
U
T
H
E
N
T
I
C
A
T
I
O
N
_
D
E
S
C
'
,
 
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
A
U
T
H
E
N
T
I
C
A
T
I
O
N
_
D
E
S
C
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
A
U
T
H
E
N
T
I
C
A
T
I
O
N
_
E
X
A
M
P
L
E
'
]
	
	
	
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
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
A
U
T
H
E
N
T
I
C
A
T
I
O
N
_
E
X
A
M
P
L
E
'
,
 
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
A
U
T
H
E
N
T
I
C
A
T
I
O
N
_
E
X
A
M
P
L
E
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
M
E
T
H
O
D
S
_
T
I
T
L
E
'
]
	
	
	
	
	
	
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
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
M
E
T
H
O
D
S
_
T
I
T
L
E
'
,
 
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
M
E
T
H
O
D
S
_
T
I
T
L
E
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
M
E
T
H
O
D
S
_
D
E
S
C
'
]
	
	
	
	
	
	
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
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
M
E
T
H
O
D
S
_
D
E
S
C
'
,
 
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
M
E
T
H
O
D
S
_
D
E
S
C
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
R
E
Q
U
E
S
T
S
_
T
I
T
L
E
'
]
	
	
	
	
	
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
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
R
E
Q
U
E
S
T
S
_
T
I
T
L
E
'
,
 
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
R
E
Q
U
E
S
T
S
_
T
I
T
L
E
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
R
E
Q
U
E
S
T
S
_
D
E
S
C
_
1
'
]
	
	
	
	
	
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
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
R
E
Q
U
E
S
T
S
_
D
E
S
C
_
1
'
,
 
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
R
E
Q
U
E
S
T
S
_
D
E
S
C
_
1
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
R
E
Q
U
E
S
T
S
_
D
E
S
C
_
2
'
]
	
	
	
	
	
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
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
R
E
Q
U
E
S
T
S
_
D
E
S
C
_
2
'
,
 
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
R
E
Q
U
E
S
T
S
_
D
E
S
C
_
2
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
R
E
Q
U
E
S
T
S
_
S
U
C
C
E
S
S
_
R
E
S
P
O
N
S
E
_
D
E
S
C
'
]
	
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
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
R
E
Q
U
E
S
T
S
_
S
U
C
C
E
S
S
_
R
E
S
P
O
N
S
E
_
D
E
S
C
'
,
 
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
R
E
Q
U
E
S
T
S
_
S
U
C
C
E
S
S
_
R
E
S
P
O
N
S
E
_
D
E
S
C
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
R
E
Q
U
E
S
T
S
_
S
U
C
C
E
S
S
_
R
E
S
P
O
N
S
E
'
]
	
	
	
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
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
R
E
Q
U
E
S
T
S
_
S
U
C
C
E
S
S
_
R
E
S
P
O
N
S
E
'
,
 
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
R
E
Q
U
E
S
T
S
_
S
U
C
C
E
S
S
_
R
E
S
P
O
N
S
E
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
R
E
Q
U
E
S
T
S
_
F
A
I
L
U
R
E
_
R
E
S
P
O
N
S
E
_
D
E
S
C
'
]
	
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
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
R
E
Q
U
E
S
T
S
_
F
A
I
L
U
R
E
_
R
E
S
P
O
N
S
E
_
D
E
S
C
'
,
 
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
R
E
Q
U
E
S
T
S
_
F
A
I
L
U
R
E
_
R
E
S
P
O
N
S
E
_
D
E
S
C
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
R
E
Q
U
E
S
T
S
_
F
A
I
L
U
R
E
_
R
E
S
P
O
N
S
E
'
]
	
	
	
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
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
R
E
Q
U
E
S
T
S
_
F
A
I
L
U
R
E
_
R
E
S
P
O
N
S
E
'
,
 
'
_
O
A
U
T
H
_
I
N
F
O
R
M
A
T
I
O
N
_
R
E
Q
U
E
S
T
S
_
F
A
I
L
U
R
E
_
R
E
S
P
O
N
S
E
'
,
 
f
a
l
s
e
)
;

	
	

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
]
	
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
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
,
 
'
_
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
]
	
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
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
,
 
'
_
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
]
	
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
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
,
 
'
_
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
]
	
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
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
,
 
'
_
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
]
	
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
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
,
 
'
_
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
]
	
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
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
,
 
'
_
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
'
_
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
]
	
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
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
,
 
'
_
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
,
 
f
a
l
s
e
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
S
E
L
E
C
T
 
c
l
i
e
n
t
_
i
d
,
s
c
o
p
e
,
i
d
e
n
t
i
f
i
e
r
 
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
o
a
u
t
h
_
c
l
i
e
n
t
s
 
W
H
E
R
E
 
u
s
e
r
_
i
d
 
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
J
R
U
s
e
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
c
o
u
n
t
(
$
r
e
s
u
l
t
)
>
0
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
c
l
i
e
n
t
)

	
	
	
	
{

	
	
	
	
i
f
 
(
$
c
l
i
e
n
t
-
>
c
l
i
e
n
t
_
i
d
 
!
=
 
"
s
y
s
t
e
m
"
 
&
&
 
$
c
l
i
e
n
t
-
>
c
l
i
e
n
t
_
i
d
 
!
=
 
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
u
s
e
r
n
a
m
e
)

	
	
	
	
	
{

	
	
	
	
	
$
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

	
	
	
	
	
$
r
[
'
C
L
I
E
N
T
_
I
D
'
]
=
$
c
l
i
e
n
t
-
>
c
l
i
e
n
t
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
I
D
E
N
T
I
F
I
E
R
'
]
=
$
c
l
i
e
n
t
-
>
i
d
e
n
t
i
f
i
e
r
;

	
	
	
	
	
$
r
[
'
S
C
O
P
E
'
]
=
 
'
'
;

	
	
	
	
	
i
f
 
(
t
r
i
m
(
$
c
l
i
e
n
t
-
>
s
c
o
p
e
)
 
!
=
 
"
"
 
)

	
	
	
	
	
	
{

	
	
	
	
	
	
$
b
a
n
g
=
 
e
x
p
l
o
d
e
 
 
(
 
"
,
"
 
,
 
$
c
l
i
e
n
t
-
>
s
c
o
p
e
 
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
b
a
n
g
 
a
s
 
$
s
c
o
p
e
_
d
e
f
i
n
i
t
i
o
n
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
a
l
l
_
a
v
a
i
l
a
b
l
e
_
s
c
o
p
e
s
[
$
s
c
o
p
e
_
d
e
f
i
n
i
t
i
o
n
]
)
)

	
	
	
	
	
	
	
	
$
r
[
'
S
C
O
P
E
'
]
 
.
=
 
$
a
l
l
_
a
v
a
i
l
a
b
l
e
_
s
c
o
p
e
s
[
$
s
c
o
p
e
_
d
e
f
i
n
i
t
i
o
n
]
.
"
,
 
"
;

	
	
	
	
	
	
	

	
	
	
	
	
	
	
}

	
	
	
	
	
	
}

	
	
	
	
	
$
r
[
'
S
C
O
P
E
'
]
 
=
 
r
t
r
i
m
(
t
r
i
m
(
$
r
[
'
S
C
O
P
E
'
]
)
,
 
"
,
"
)
;

	
	
	
	
	
$
t
o
o
l
b
a
r
-
>
n
e
w
T
o
o
l
b
a
r
(
)
;

	
	
	
	
	
$
t
o
o
l
b
a
r
-
>
a
d
d
I
t
e
m
(
 
'
f
a
 
f
a
-
p
e
n
c
i
l
-
s
q
u
a
r
e
-
o
'
,
 
'
b
t
n
 
b
t
n
-
i
n
f
o
'
,
 
'
'
,
 
j
o
m
r
e
s
U
R
L
(
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
 
.
'
&
t
a
s
k
=
o
a
u
t
h
_
e
d
i
t
_
c
l
i
e
n
t
&
c
l
i
e
n
t
_
i
d
=
'
.
$
r
[
'
C
L
I
E
N
T
_
I
D
'
]
 
)
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
C
O
M
M
O
N
_
V
I
E
W
'
,
 
'
C
O
M
M
O
N
_
V
I
E
W
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

	
	
	
	
	
$
t
o
o
l
b
a
r
-
>
a
d
d
S
e
c
o
n
d
a
r
y
I
t
e
m
(
'
f
a
 
f
a
-
t
r
a
s
h
'
,
 
'
'
,
 
'
'
,
 
j
o
m
r
e
s
U
R
L
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
.
'
&
t
a
s
k
=
d
e
l
e
t
e
_
c
l
i
e
n
t
&
c
l
i
e
n
t
_
i
d
=
'
.
$
r
[
'
C
L
I
E
N
T
_
I
D
'
]
)
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
C
O
M
M
O
N
_
D
E
L
E
T
E
'
,
 
'
C
O
M
M
O
N
_
D
E
L
E
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
;

	
	
	
	
	
$
r
[
'
E
D
I
T
L
I
N
K
'
]
=
$
t
o
o
l
b
a
r
-
>
g
e
t
T
o
o
l
b
a
r
(
)
;

	
	
	
	
	

	
	
	
	
	
$
r
o
w
s
[
]
=
$
r
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}

	
	
	

	
	
$
t
o
o
l
b
a
r
-
>
n
e
w
T
o
o
l
b
a
r
(
)
;

	
	
$
t
o
o
l
b
a
r
-
>
a
d
d
I
t
e
m
(
 
'
i
c
o
n
-
e
d
i
t
'
,
 
'
b
t
n
 
b
t
n
-
i
n
f
o
'
,
 
'
'
,
 
j
o
m
r
e
s
U
R
L
(
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
 
.
 
'
&
t
a
s
k
=
o
a
u
t
h
_
e
d
i
t
_
c
l
i
e
n
t
&
c
l
i
e
n
t
_
i
d
=
'
 
)
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
C
O
M
M
O
N
_
N
E
W
'
,
 
'
C
O
M
M
O
N
_
N
E
W
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

	
	
$
o
u
t
p
u
t
[
'
J
O
M
R
E
S
T
O
O
L
B
A
R
'
]
=
$
t
o
o
l
b
a
r
-
>
g
e
t
T
o
o
l
b
a
r
(
)
;

	
	

	
	
$
p
a
g
e
o
u
t
p
u
t
[
]
=
$
o
u
t
p
u
t
;

	
	
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

	
	
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
 
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
F
R
O
N
T
E
N
D
 
 
)
;

	
	
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
 
'
l
i
s
t
_
c
l
i
e
n
t
s
.
h
t
m
l
'
 
)
;

	
	
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
 
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
 
)
;

	
	
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
 
'
r
o
w
s
'
,
 
$
r
o
w
s
 
)
;

	
	
$
t
m
p
l
-
>
d
i
s
p
l
a
y
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

	
	
}



	
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

	
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
R
e
t
V
a
l
s
(
)

	
	
{

	
	
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

	
}
