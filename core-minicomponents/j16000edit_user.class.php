
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
1
6
0
0
0
e
d
i
t
_
u
s
e
r

	
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

	
	
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
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
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

	
	
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
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
 
$
_
R
E
Q
U
E
S
T
,
 
'
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
'
,
 
0
 
)
;
 
/
/
m
a
n
a
g
e
r
 
u
i
d

	
	

	
	
$
j
o
m
r
e
s
_
u
s
e
r
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
u
s
e
r
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
u
s
e
r
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
s
(
)
;
 
/
/
w
e
 
g
e
t
 
a
l
l
 
u
s
e
r
s
 
s
o
 
w
e
 
c
a
n
 
d
i
s
p
l
a
y
 
u
s
e
r
s
 
f
o
r
 
e
a
c
h
 
p
r
o
p
e
r
t
y

	
	

	
	
i
f
 
(
 
$
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
 
>
 
0
 
&
&
 
$
j
o
m
r
e
s
_
u
s
e
r
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
(
 
$
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
 
)
 
)

	
	
	
{

	
	
	
$
i
d
	
	
	
	
	
	
=
 
$
j
o
m
r
e
s
_
u
s
e
r
s
-
>
i
d
;

	
	
	
$
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
 
	
	
	
=
 
$
j
o
m
r
e
s
_
u
s
e
r
s
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
j
o
m
r
e
s
_
u
s
e
r
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
;

	
	
	
$
a
p
i
k
e
y
 
	
	
	
	
=
 
$
j
o
m
r
e
s
_
u
s
e
r
s
-
>
a
p
i
k
e
y
;

	
	
	
$
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
 
$
j
o
m
r
e
s
_
u
s
e
r
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
;

	
	
	
$
u
s
e
r
n
a
m
e
	
	
	
	
=
 
$
j
o
m
r
e
s
_
u
s
e
r
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
;

	
	
	
$
d
i
s
a
b
l
e
d
 
	
	
	
	
=
 
'
d
i
s
a
b
l
e
d
=
"
d
i
s
a
b
l
e
d
"
'
;

	
	
	
$
n
e
w
_
a
p
i
_
k
e
y
_
l
i
n
k
 
	
	
=
 
'
<
a
 
h
r
e
f
=
"
'
 
.
 
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
_
A
D
M
I
N
 
.
 
'
&
t
a
s
k
=
g
e
n
e
r
a
t
e
_
u
s
e
r
_
a
p
i
_
k
e
y
&
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
'
 
.
 
$
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
 
'
"
 
c
l
a
s
s
=
"
b
t
n
 
b
t
n
-
d
e
f
a
u
l
t
"
>
'
 
.
 
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
 
"
_
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
K
E
Y
_
R
E
M
A
K
E
"
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
A
P
I
K
E
Y
_
R
E
M
A
K
E
'
,
 
f
a
l
s
e
 
)
 
.
 
'
<
/
a
>
'
;

	
	
	
$
c
m
s
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
_
l
i
n
k
	
=
 
'
<
a
 
h
r
e
f
=
"
'
 
.
 
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
C
m
s
U
s
e
r
P
r
o
f
i
l
e
L
i
n
k
(
$
j
o
m
r
e
s
_
u
s
e
r
s
-
>
i
d
)
 
.
 
'
"
 
c
l
a
s
s
=
"
b
t
n
 
b
t
n
-
d
e
f
a
u
l
t
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
'
 
.
 
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
 
"
E
D
I
T
_
C
M
S
_
U
S
E
R
"
,
 
'
E
D
I
T
_
C
M
S
_
U
S
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
 
.
 
'
<
/
a
>
'
;

	
	
	
}

	
	
e
l
s
e

	
	
	
{

	
	
	
/
/
d
e
f
a
u
l
t
 
v
a
l
u
e
s

	
	
	
$
i
d
	
	
	
	
	
	
=
 
0
;

	
	
	
$
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
n
o
 
c
m
s
 
u
s
e
r
 
i
d
 
y
e
t

	
	
	
$
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
 
	
	
	
=
 
5
0
;
 
/
/
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
 
b
y
 
d
e
f
a
u
l
t

	
	
	
$
a
p
i
k
e
y
 
	
	
	
	
=
 
c
r
e
a
t
e
N
e
w
A
P
I
K
e
y
(
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
 
a
 
n
e
w
 
a
p
i
 
k
e
y

	
	
	
$
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
n
o
 
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
i
e
s
 
y
e
t

	
	
	
$
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

	
	
	
$
d
i
s
a
b
l
e
d
 
	
	
	
	
=
 
'
'
;

	
	
	
$
n
e
w
_
a
p
i
_
k
e
y
_
l
i
n
k
 
	
	
=
 
'
'
;

	
	
	
$
c
m
s
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
_
l
i
n
k
	
=
 
'
'
;

	
	
	
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

	
	
$
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

	
	

	
	
$
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
-
>
g
e
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
n
a
m
e
_
m
u
l
t
i
(
 
$
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
 
)
;

	
	

	
	
/
/
u
s
e
r
 
r
o
l
e
s
 
d
r
o
p
d
o
w
n

	
	
$
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
$
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
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
 
'
4
0
'
,
 
'
P
a
r
t
n
e
r
'
 
)
;
 
/
/
e
x
a
m
p
l
e
 
p
a
r
t
n
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
 
t
o
 
b
e
 
a
d
d
e
d
 
l
a
t
e
r

	
	
$
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
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
 
'
5
0
'
,
 
'
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
'
 
)
;

	
	
$
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
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
 
'
7
0
'
,
 
'
P
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
'
 
)
;

	
	
$
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
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
 
'
9
0
'
,
 
'
S
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
'
 
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
A
C
C
E
S
S
L
E
V
E
L
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
 
$
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
s
,
 
'
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
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
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
 
a
s
 
$
i
 
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
p
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
s
 
=
 
'
'
;

	
	
	
$
c
h
e
c
k
e
d
 
=
 
'
'
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
j
o
m
r
e
s
_
u
s
e
r
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
i
e
s
_
u
s
e
r
s
_
x
r
e
f
[
 
$
i
 
]
)
 
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
j
o
m
r
e
s
_
u
s
e
r
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
i
e
s
_
u
s
e
r
s
_
x
r
e
f
[
 
$
i
 
]
 
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
j
o
m
r
e
s
_
u
s
e
r
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
i
e
s
_
u
s
e
r
s
_
x
r
e
f
[
 
$
i
 
]
 
a
s
 
$
m
 
)

	
	
	
	
	
	
{

	
	
	
	
	
	
i
f
 
(
 
$
m
 
=
=
 
$
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
 
)

	
	
	
	
	
	
	
{

	
	
	
	
	
	
	
$
c
h
e
c
k
e
d
 
=
 
"
c
h
e
c
k
e
d
"
;

	
	
	
	
	
	
	
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
M
a
n
a
g
e
r
s
 
.
=
 
$
j
o
m
r
e
s
_
u
s
e
r
s
-
>
u
s
e
r
s
[
 
$
m
 
]
[
'
u
s
e
r
n
a
m
e
'
]
 
.
 
"
,
 
"
;

	
	
	
	
	
	
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
M
a
n
a
g
e
r
s
 
=
 
r
t
r
i
m
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
M
a
n
a
g
e
r
s
,
 
'
,
 
'
 
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
p
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
s
 
=
 
'
'
;

	
	
	
	
}

	
	
	

	
	
	
$
r
[
 
'
I
N
P
U
T
'
 
]
 
 
 
 
 
 
 
 
=
 
'
<
i
n
p
u
t
 
t
y
p
e
=
"
c
h
e
c
k
b
o
x
"
 
i
d
=
"
c
b
'
 
.
 
c
o
u
n
t
(
 
$
r
o
w
s
 
)
 
.
 
'
"
 
n
a
m
e
=
"
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
[
]
"
 
v
a
l
u
e
=
"
'
 
.
 
$
i
 
.
 
'
"
 
'
 
.
 
$
c
h
e
c
k
e
d
 
.
 
'
>
'
;

	
	
	
$
r
[
 
'
P
R
O
P
E
R
T
Y
N
A
M
E
'
 
]
 
=
 
$
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
n
a
m
e
s
[
$
i
]
;

	
	
	
$
r
[
 
'
M
A
N
A
G
E
R
S
'
 
]
 
 
 
 
 
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
M
a
n
a
g
e
r
s
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

	
	

	
	
$
j
r
t
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
_
t
o
o
l
b
a
r
'
 
)
;

	
	
$
j
r
t
b
 
 
 
=
 
$
j
r
t
b
a
r
-
>
s
t
a
r
t
T
a
b
l
e
(
)
;

	
	
$
i
m
a
g
e
 
 
=
 
$
j
r
t
b
a
r
-
>
m
a
k
e
I
m
a
g
e
V
a
l
i
d
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
S
_
R
E
L
P
A
T
H
.
'
j
o
m
r
e
s
i
m
a
g
e
s
/
s
m
a
l
l
/
S
a
v
e
.
p
n
g
'
 
)
;

	
	

	
	
$
l
i
n
k
 
 
 
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
 
"
/
"
 
.
 
J
O
M
R
E
S
_
A
D
M
I
N
I
S
T
R
A
T
O
R
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
 
"
/
i
n
d
e
x
.
p
h
p
?
o
p
t
i
o
n
=
c
o
m
_
j
o
m
r
e
s
"
;

	
	

	
	
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
 
'
c
a
n
c
e
l
'
,
 
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
_
A
D
M
I
N
 
.
 
"
&
t
a
s
k
=
l
i
s
t
_
u
s
e
r
s
"
,
 
'
'
 
)
;

	
	
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
c
u
s
t
o
m
T
o
o
l
b
a
r
I
t
e
m
(
 
'
s
a
v
e
P
r
o
f
i
l
e
'
,
 
$
l
i
n
k
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
 
"
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
S
A
V
E
"
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
S
A
V
E
'
,
 
f
a
l
s
e
 
)
,
 
$
s
u
b
m
i
t
O
n
C
l
i
c
k
 
=
 
t
r
u
e
,
 
$
s
u
b
m
i
t
T
a
s
k
 
=
 
"
s
a
v
e
_
u
s
e
r
"
,
 
$
i
m
a
g
e
 
)
;

	
	
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
e
n
d
T
a
b
l
e
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
j
r
t
b
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
J
R
P
O
R
T
A
L
_
P
R
O
P
E
R
T
I
E
S
_
P
R
O
P
E
R
T
Y
N
A
M
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
 
"
_
J
R
P
O
R
T
A
L
_
P
R
O
P
E
R
T
I
E
S
_
P
R
O
P
E
R
T
Y
N
A
M
E
"
,
 
'
_
J
R
P
O
R
T
A
L
_
P
R
O
P
E
R
T
I
E
S
_
P
R
O
P
E
R
T
Y
N
A
M
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
W
P
R
O
F
I
L
E
S
_
U
S
E
R
S
W
I
T
H
A
C
C
E
S
S
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
W
P
R
O
F
I
L
E
S
_
U
S
E
R
S
W
I
T
H
A
C
C
E
S
S
"
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
S
H
O
W
P
R
O
F
I
L
E
S
_
U
S
E
R
S
W
I
T
H
A
C
C
E
S
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
H
A
C
C
E
S
S
L
E
V
E
L
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
 
"
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
A
S
S
I
G
N
U
S
E
R
_
A
U
T
H
O
R
I
S
E
D
A
C
C
E
S
S
L
E
V
E
L
"
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
A
S
S
I
G
N
U
S
E
R
_
A
U
T
H
O
R
I
S
E
D
A
C
C
E
S
S
L
E
V
E
L
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
H
U
S
E
R
N
A
M
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
 
"
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
L
I
S
T
I
N
G
_
U
S
E
R
"
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
L
I
S
T
I
N
G
_
U
S
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

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
U
S
E
R
N
A
M
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
J
O
M
R
E
S
_
M
A
N
A
G
E
R
_
C
H
O
O
S
E
_
S
E
A
R
C
H
_
I
N
S
T
R
U
C
T
I
O
N
S
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
A
N
A
G
E
R
_
C
H
O
O
S
E
_
S
E
A
R
C
H
_
I
N
S
T
R
U
C
T
I
O
N
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

 
 
 
 
 
 
 
 
e
l
s
e

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
U
S
E
R
N
A
M
E
_
D
E
S
C
'
 
]
	
	
	
	
	
	
	
=
 
'
'
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
 
"
_
J
O
M
R
E
S
_
E
D
I
T
_
P
R
O
F
I
L
E
"
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
E
D
I
T
_
P
R
O
F
I
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
I
D
'
]
 
	
	
	
	
	
=
 
$
i
d
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
C
M
S
_
U
S
E
R
_
I
D
'
]
 
	
	
	
=
 
$
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
o
u
t
p
u
t
[
'
U
S
E
R
N
A
M
E
'
]
 
	
	
	
=
 
$
u
s
e
r
n
a
m
e
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
A
P
I
_
K
E
Y
'
]
 
	
	
	
	
=
 
$
a
p
i
k
e
y
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
D
I
S
A
B
L
E
D
'
]
 
	
	
	
=
 
$
d
i
s
a
b
l
e
d
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
N
E
W
A
P
I
K
E
Y
_
L
I
N
K
'
]
 
	
	
=
 
$
n
e
w
_
a
p
i
_
k
e
y
_
l
i
n
k
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
U
S
E
R
_
P
R
O
F
I
L
E
_
L
I
N
K
'
]
	
=
 
$
c
m
s
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
_
l
i
n
k
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
T
O
T
A
L
I
N
L
I
S
T
P
L
U
S
O
N
E
'
 
]
 
=
 
c
o
u
n
t
(
 
$
r
o
w
s
 
)
 
+
 
1
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
A
D
M
I
N
I
S
T
R
A
T
O
R
 
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
e
d
i
t
_
u
s
e
r
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

