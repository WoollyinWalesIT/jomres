
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
1
l
i
s
t
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
a
j
a
x

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

 
 
 
 
 
 
 
 
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
 
=
 
g
e
t
D
e
f
a
u
l
t
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
s
t
a
r
t
D
a
t
e
 
=
 
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
G
E
T
,
 
'
s
t
a
r
t
D
a
t
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
e
n
d
D
a
t
e
 
=
 
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
G
E
T
,
 
'
e
n
d
D
a
t
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
d
e
p
o
s
i
t
_
s
t
a
t
u
s
 
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
G
E
T
,
 
'
d
e
p
o
s
i
t
_
s
t
a
t
u
s
'
,
 
'
2
'
)
;

 
 
 
 
 
 
 
 
$
r
e
s
i
d
e
n
t
_
s
t
a
t
u
s
 
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
G
E
T
,
 
'
r
e
s
i
d
e
n
t
_
s
t
a
t
u
s
'
,
 
'
2
'
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
s
t
a
t
u
s
 
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
G
E
T
,
 
'
b
o
o
k
i
n
g
_
s
t
a
t
u
s
'
,
 
'
2
'
)
;

 
 
 
 
 
 
 
 
$
s
h
o
w
_
a
l
l
 
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
G
E
T
,
 
'
s
h
o
w
_
a
l
l
'
,
 
'
0
'
)
;

 
 
 
 
 
 
 
 
$
t
a
g
 
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
G
E
T
,
 
'
t
a
g
'
,
 
'
0
'
)
;

	
	
$
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
G
E
T
,
 
'
g
u
e
s
t
_
u
i
d
'
,
 
'
0
'
)
;


 
 
 
 
 
 
 
 
$
i
m
g
_
p
e
n
d
i
n
g
 
=
 
'
l
a
b
e
l
 
l
a
b
e
l
-
g
r
e
y
'
;

 
 
 
 
 
 
 
 
$
i
m
g
_
a
r
r
i
v
e
t
o
d
a
y
 
=
 
'
l
a
b
e
l
 
l
a
b
e
l
-
o
r
a
n
g
e
'
;

 
 
 
 
 
 
 
 
$
i
m
g
_
r
e
s
i
d
e
n
t
 
=
 
'
l
a
b
e
l
 
l
a
b
e
l
-
g
r
e
e
n
'
;

 
 
 
 
 
 
 
 
$
i
m
g
_
l
a
t
e
 
=
 
'
l
a
b
e
l
 
l
a
b
e
l
-
r
e
d
'
;

 
 
 
 
 
 
 
 
$
i
m
g
_
d
e
p
a
r
t
t
o
d
a
y
 
=
 
'
l
a
b
e
l
 
l
a
b
e
l
-
b
l
u
e
'
;

 
 
 
 
 
 
 
 
$
i
m
g
_
s
t
i
l
l
h
e
r
e
 
=
 
'
l
a
b
e
l
 
l
a
b
e
l
-
p
u
r
p
l
e
'
;

 
 
 
 
 
 
 
 
$
i
m
g
_
b
o
o
k
e
d
o
u
t
 
=
 
'
l
a
b
e
l
 
l
a
b
e
l
-
t
e
a
l
'
;

 
 
 
 
 
 
 
 
$
i
m
g
_
c
a
n
c
e
l
l
e
d
 
=
 
'
l
a
b
e
l
 
l
a
b
e
l
-
b
l
a
c
k
'
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
s
e
t
 
t
h
e
 
t
a
b
l
e
 
c
o
u
l
m
n
s
,
 
i
n
 
t
h
e
 
e
x
a
c
t
 
o
r
c
e
r
 
i
n
 
w
h
i
c
h
 
t
h
e
y
`
r
e
 
d
i
s
p
l
a
y
e
d
 
i
n
 
t
h
e
 
t
a
b
l
e

 
 
 
 
 
 
 
 
$
a
C
o
l
u
m
n
s
 
=
 
a
r
r
a
y
(
'
a
.
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
'
,
 
'
a
.
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
'
,
 
'
a
.
t
a
g
'
,
 
'
a
.
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
,
 
'
a
.
a
r
r
i
v
a
l
'
,
 
'
a
.
d
e
p
a
r
t
u
r
e
'
,
 
'
b
.
f
i
r
s
t
n
a
m
e
'
,
 
'
b
.
s
u
r
n
a
m
e
'
,
 
'
b
.
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
'
,
 
'
b
.
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
'
,
 
'
b
.
e
m
a
i
l
'
,
 
'
a
.
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
,
 
'
a
.
d
e
p
o
s
i
t
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
,
 
'
a
.
d
e
p
o
s
i
t
_
p
a
i
d
'
,
 
'
a
.
s
p
e
c
i
a
l
_
r
e
q
s
'
,
 
'
a
.
i
n
v
o
i
c
e
_
u
i
d
'
,
 
'
a
.
t
i
m
e
s
t
a
m
p
'
,
 
'
a
.
l
a
s
t
_
c
h
a
n
g
e
d
'
,
 
'
a
.
a
p
p
r
o
v
e
d
'
,
 
'
a
.
u
s
e
r
n
a
m
e
'
)
;


 
 
 
 
 
 
 
 
/
/
s
e
t
 
c
o
l
u
m
n
s
 
c
o
u
n
t

	
	
$
n
 
=
 
c
o
u
n
t
(
$
a
C
o
l
u
m
n
s
)
;


 
 
 
 
 
 
 
 
/
*

 
 
 
 
 
 
 
 
 
*
 
P
a
g
i
n
g

 
 
 
 
 
 
 
 
 
*
/

 
 
 
 
 
 
 
 
$
s
L
i
m
i
t
 
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
_
G
E
T
[
'
s
t
a
r
t
'
]
)
 
&
&
 
$
_
G
E
T
[
'
s
t
a
r
t
'
]
 
!
=
 
'
-
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
L
i
m
i
t
 
=
 
'
L
I
M
I
T
 
'
.
(
i
n
t
)
$
_
G
E
T
[
'
s
t
a
r
t
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
_
G
E
T
[
'
l
e
n
g
t
h
'
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
*

 
 
 
 
 
 
 
 
 
*
 
O
r
d
e
r
i
n
g

 
 
 
 
 
 
 
 
 
*
/

 
 
 
 
 
 
 
 
$
s
O
r
d
e
r
 
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
_
G
E
T
[
'
j
r
_
o
r
d
e
r
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
O
r
d
e
r
 
=
 
'
O
R
D
E
R
 
B
Y
 
'
;

	
	
	
f
o
r
 
(
$
i
 
=
 
0
;
 
$
i
 
<
 
$
n
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
i
s
s
e
t
(
$
_
G
E
T
[
'
j
r
_
o
r
d
e
r
'
]
[
$
i
]
[
'
c
o
l
u
m
n
'
]
)
)
 
{

	
	
	
	
	
$
c
o
l
u
m
n
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
_
G
E
T
[
'
j
r
_
o
r
d
e
r
'
]
[
$
i
]
[
'
c
o
l
u
m
n
'
]
;

	
	
	
	
	
$
s
O
r
d
e
r
 
.
=
 
'
'
.
$
a
C
o
l
u
m
n
s
[
$
c
o
l
u
m
n
_
i
d
]
.
'
 
'
.
(
$
_
G
E
T
[
'
j
r
_
o
r
d
e
r
'
]
[
$
i
]
[
'
d
i
r
'
]
 
=
=
=
 
'
a
s
c
'
 
?
 
'
A
S
C
'
 
:
 
'
D
E
S
C
'
)
.
'
,
 
'
;

	
	
	
	
}

	
	
	
}

	
	
	
i
f
 
(
$
s
O
r
d
e
r
 
=
=
 
'
O
R
D
E
R
 
B
Y
 
'
)
 
{

	
	
	
	
$
s
O
r
d
e
r
 
=
 
'
'
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
s
O
r
d
e
r
 
=
 
r
t
r
i
m
(
$
s
O
r
d
e
r
,
 
'
,
 
'
)
;

	
	
	
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
*

 
 
 
 
 
 
 
 
 
*
 
F
i
l
t
e
r
i
n
g

 
 
 
 
 
 
 
 
 
*
 
N
O
T
E
 
t
h
i
s
 
d
o
e
s
 
n
o
t
 
m
a
t
c
h
 
t
h
e
 
b
u
i
l
t
-
i
n
 
D
a
t
a
T
a
b
l
e
s
 
f
i
l
t
e
r
i
n
g
 
w
h
i
c
h
 
d
o
e
s
 
i
t

 
 
 
 
 
 
 
 
 
*
 
w
o
r
d
 
b
y
 
w
o
r
d
 
o
n
 
a
n
y
 
f
i
e
l
d
.
 
I
t
'
s
 
p
o
s
s
i
b
l
e
 
t
o
 
d
o
 
h
e
r
e
,
 
b
u
t
 
c
o
n
c
e
r
n
e
d
 
a
b
o
u
t
 
e
f
f
i
c
i
e
n
c
y

 
 
 
 
 
 
 
 
 
*
 
o
n
 
v
e
r
y
 
l
a
r
g
e
 
t
a
b
l
e
s
,
 
a
n
d
 
M
y
S
Q
L
'
s
 
r
e
g
e
x
 
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
s
 
v
e
r
y
 
l
i
m
i
t
e
d

 
 
 
 
 
 
 
 
 
*
/

 
 
 
 
 
 
 
 
$
s
W
h
e
r
e
 
=
 
'
'
;

	
	
$
s
e
a
r
c
h
 
=
 
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
G
E
T
,
 
'
j
r
_
s
e
a
r
c
h
'
,
 
a
r
r
a
y
(
)
)
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
s
e
a
r
c
h
[
'
v
a
l
u
e
'
]
)
 
&
&
 
$
s
e
a
r
c
h
[
'
v
a
l
u
e
'
]
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
W
h
e
r
e
 
=
 
'
A
N
D
 
(
'
;

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
 
(
$
i
 
=
 
0
;
 
$
i
 
<
 
$
n
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
W
h
e
r
e
 
.
=
 
'
'
.
$
a
C
o
l
u
m
n
s
[
$
i
]
.
"
 
L
I
K
E
 
'
%
"
.
$
s
e
a
r
c
h
[
'
v
a
l
u
e
'
]
.
"
%
'
 
O
R
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
	
$
s
W
h
e
r
e
 
=
 
r
t
r
i
m
(
$
s
W
h
e
r
e
,
 
'
 
O
R
 
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
W
h
e
r
e
 
.
=
 
'
)
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
*

 
 
 
 
 
 
 
 
 
*
 
P
r
e
f
i
l
t
e
r

 
 
 
 
 
 
 
 
 
*
/

 
 
 
 
 
 
 
 
i
f
 
(
$
s
h
o
w
_
a
l
l
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
=
 
'
W
H
E
R
E
 
a
.
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
 
I
N
 
(
'
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
J
R
U
s
e
r
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
.
'
)
 
A
N
D
 
a
.
c
o
n
t
r
a
c
t
_
t
o
t
a
l
 
>
 
0
 
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
=
 
"
W
H
E
R
E
 
a
.
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
"
.
(
i
n
t
)
 
$
d
e
f
a
u
l
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
"
'
 
A
N
D
 
a
.
c
o
n
t
r
a
c
t
_
t
o
t
a
l
 
>
 
0
 
"
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
d
a
t
e
 
i
n
t
e
r
v
a
l
 
f
i
l
t
e
r

 
 
 
 
 
 
 
 
i
f
 
(
$
s
t
a
r
t
D
a
t
e
 
!
=
 
'
'
 
&
&
 
$
e
n
d
D
a
t
e
 
!
=
 
'
'
 
&
&
 
$
t
a
g
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
.
=
 
"
A
N
D
 
(
 
(
 
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
a
.
a
r
r
i
v
a
l
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
 
B
E
T
W
E
E
N
 
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
$
s
t
a
r
t
D
a
t
e
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
'
"
.
$
e
n
d
D
a
t
e
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
 
)
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
.
=
 
"
O
R
 
(
 
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
a
.
d
e
p
a
r
t
u
r
e
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
 
B
E
T
W
E
E
N
 
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
$
s
t
a
r
t
D
a
t
e
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
'
"
.
$
e
n
d
D
a
t
e
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
 
)
 
)
 
"
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
b
o
o
k
e
d
 
o
u
t
 
o
r
 
c
a
n
c
e
l
l
e
d
 
b
o
o
k
i
n
g
s

 
 
 
 
 
 
 
 
i
f
 
(
$
d
e
p
o
s
i
t
_
s
t
a
t
u
s
 
!
=
 
2
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
.
=
 
"
A
N
D
 
a
.
d
e
p
o
s
i
t
_
p
a
i
d
 
=
 
'
"
.
$
d
e
p
o
s
i
t
_
s
t
a
t
u
s
.
"
'
 
"
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
i
d
e
n
t
_
s
t
a
t
u
s
 
!
=
 
2
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
i
d
e
n
t
_
s
t
a
t
u
s
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
.
=
 
"
A
N
D
 
(
 
a
.
b
o
o
k
e
d
_
i
n
 
=
 
'
1
'
 
A
N
D
 
a
.
b
o
o
k
e
d
o
u
t
 
=
 
'
0
'
 
)
 
"
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
e
s
i
d
e
n
t
_
s
t
a
t
u
s
 
=
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
.
=
 
"
A
N
D
 
a
.
b
o
o
k
e
d
o
u
t
 
=
 
'
1
'
 
"
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
e
s
i
d
e
n
t
_
s
t
a
t
u
s
 
=
=
 
'
3
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
.
=
 
"
A
N
D
 
(
 
a
.
b
o
o
k
e
d
_
i
n
 
=
 
'
0
'
 
A
N
D
 
a
.
b
o
o
k
e
d
o
u
t
 
=
 
'
0
'
 
)
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
b
o
o
k
i
n
g
_
s
t
a
t
u
s
 
!
=
 
2
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
o
o
k
i
n
g
_
s
t
a
t
u
s
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
.
=
 
"
A
N
D
 
(
 
a
.
c
a
n
c
e
l
l
e
d
 
=
 
'
0
'
 
A
N
D
 
a
.
b
o
o
k
e
d
o
u
t
 
=
 
'
0
'
 
)
 
"
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
b
o
o
k
i
n
g
_
s
t
a
t
u
s
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
.
=
 
"
A
N
D
 
a
.
c
a
n
c
e
l
l
e
d
 
=
 
'
1
'
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
t
a
g
 
!
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
.
=
 
"
A
N
D
 
a
.
t
a
g
 
L
I
K
E
 
'
%
"
.
$
t
a
g
.
"
%
'
 
"
;

 
 
 
 
 
 
 
 
}

	
	

	
	
i
f
 
(
$
g
u
e
s
t
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
c
l
a
u
s
e
 
.
=
 
"
A
N
D
 
a
.
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
 
"
.
$
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
 
"
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
*

 
 
 
 
 
 
 
 
 
*
 
B
u
i
l
d
 
a
n
d
 
e
x
e
c
u
t
e
 
t
h
e
 
q
u
e
r
y

 
 
 
 
 
 
 
 
 
*
/


 
 
 
 
 
 
 
 
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
T
 
S
Q
L
_
B
I
G
_
S
E
L
E
C
T
S
=
1
'
;

 
 
 
 
 
 
 
 
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
)
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
 
S
Q
L
_
C
A
L
C
_
F
O
U
N
D
_
R
O
W
S
 

	
	
	
	
	
	
a
.
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
,
 

	
	
	
	
	
	
a
.
a
r
r
i
v
a
l
,
 

	
	
	
	
	
	
a
.
d
e
p
a
r
t
u
r
e
,
 

	
	
	
	
	
	
a
.
c
o
n
t
r
a
c
t
_
t
o
t
a
l
,
 

	
	
	
	
	
	
a
.
t
a
g
,

	
	
	
	
	
	
a
.
c
u
r
r
e
n
c
y
_
c
o
d
e
,

	
	
	
	
	
	
a
.
b
o
o
k
e
d
_
i
n
,
 

	
	
	
	
	
	
a
.
b
o
o
k
e
d
o
u
t
,
 

	
	
	
	
	
	
a
.
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
,
 

	
	
	
	
	
	
a
.
d
e
p
o
s
i
t
_
p
a
i
d
,
 

	
	
	
	
	
	
a
.
s
p
e
c
i
a
l
_
r
e
q
s
,
 

	
	
	
	
	
	
a
.
t
i
m
e
s
t
a
m
p
,
 

	
	
	
	
	
	
a
.
c
a
n
c
e
l
l
e
d
,

	
	
	
	
	
	
a
.
u
s
e
r
n
a
m
e
,

	
	
	
	
	
	
a
.
i
n
v
o
i
c
e
_
u
i
d
,

	
	
	
	
	
	
a
.
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

	
	
	
	
	
	
a
.
a
p
p
r
o
v
e
d
,

	
	
	
	
	
	
a
.
l
a
s
t
_
c
h
a
n
g
e
d
,

	
	
	
	
	
	
b
.
f
i
r
s
t
n
a
m
e
,
 

	
	
	
	
	
	
b
.
s
u
r
n
a
m
e
,
 

	
	
	
	
	
	
b
.
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
,
 

	
	
	
	
	
	
b
.
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
,
 

	
	
	
	
	
	
b
.
e
m
a
i
l

	
	
	
	
	
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
 
a
 

	
	
	
	
	
	
L
E
F
T
 
J
O
I
N
 
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
 
b
 
O
N
 
a
.
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
 
b
.
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
 
'

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
.
$
c
l
a
u
s
e

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
.
'
 
'
.
$
s
W
h
e
r
e

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
.
'
 
'
.
$
s
O
r
d
e
r

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
.
'
 
'
.
$
s
L
i
m
i
t
;

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
C
o
n
t
r
a
c
t
s
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


 
 
 
 
 
 
 
 
/
*

 
 
 
 
 
 
 
 
 
*
 
T
o
t
a
l
 
n
u
m
b
e
r
 
o
f
 
r
o
w
s

 
 
 
 
 
 
 
 
 
*
/

 
 
 
 
 
 
 
 
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
 
F
O
U
N
D
_
R
O
W
S
(
)
'
;

 
 
 
 
 
 
 
 
$
m
p
 
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
m
p
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
d
r
a
w
'
 
=
>
 
(
i
n
t
)
$
_
G
E
T
[
'
d
r
a
w
'
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
r
e
c
o
r
d
s
T
o
t
a
l
'
 
=
>
 
0
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
r
e
c
o
r
d
s
F
i
l
t
e
r
e
d
'
 
=
>
 
0
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
d
a
t
a
'
 
=
>
 
a
r
r
a
y
(
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
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
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
e
x
i
t
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
*

 
 
 
 
 
 
 
 
 
*
 
S
t
a
r
t
 
b
u
i
l
d
i
n
g
 
t
h
e
 
o
u
t
p
u
t
 
a
r
r
a
y
.
 
T
h
e
 
c
o
l
u
m
n
s
 
d
a
t
a
 
s
h
o
u
l
d
 
b
e
 
b
u
i
l
t
 
i
n
 
t
h
e
 
e
x
a
c
t
 
o
r
d
e
r
 
i
n
 
w
h
i
c
h
 
t
h
e
y
`
l
l
 
b
e
 
d
i
s
p
l
a
y
e
d
 
i
n
 
t
h
e
 
t
a
b
l
e
.

 
 
 
 
 
 
 
 
 
*
/

 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
 
 
 
 
'
d
r
a
w
'
 
=
>
 
(
i
n
t
)
$
_
G
E
T
[
'
d
r
a
w
'
]
,

 
 
 
 
 
 
 
 
 
 
 
 
'
r
e
c
o
r
d
s
T
o
t
a
l
'
 
=
>
 
$
m
p
,

 
 
 
 
 
 
 
 
 
 
 
 
'
r
e
c
o
r
d
s
F
i
l
t
e
r
e
d
'
 
=
>
 
$
m
p
,

 
 
 
 
 
 
 
 
 
 
 
 
'
d
a
t
a
'
 
=
>
 
a
r
r
a
y
(
)
,

 
 
 
 
 
 
 
 
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
j
o
m
r
e
s
C
o
n
t
r
a
c
t
s
L
i
s
t
 
a
s
 
$
p
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
i
m
g
T
o
S
h
o
w
 
=
 
$
i
m
g
_
p
e
n
d
i
n
g
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
d
a
y
 
=
 
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
;

 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
i
v
a
l
 
=
 
$
p
-
>
a
r
r
i
v
a
l
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
a
r
t
u
r
e
 
=
 
$
p
-
>
d
e
p
a
r
t
u
r
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
e
d
I
n
 
=
 
$
p
-
>
b
o
o
k
e
d
_
i
n
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
e
d
O
u
t
 
=
 
$
p
-
>
b
o
o
k
e
d
o
u
t
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
n
c
e
l
l
e
d
 
=
 
$
p
-
>
c
a
n
c
e
l
l
e
d
;


 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
t
o
d
a
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
T
o
d
a
y
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
a
r
r
i
v
a
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
A
r
r
i
v
a
l
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
d
e
p
a
r
t
u
r
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
D
e
p
a
r
t
u
r
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
u
n
i
x
A
r
r
i
v
a
l
 
=
=
 
$
u
n
i
x
T
o
d
a
y
 
&
&
 
$
b
o
o
k
e
d
I
n
 
!
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
T
o
S
h
o
w
 
=
 
$
i
m
g
_
a
r
r
i
v
e
t
o
d
a
y
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
u
n
i
x
D
e
p
a
r
t
u
r
e
 
=
=
 
$
u
n
i
x
T
o
d
a
y
 
&
&
 
$
b
o
o
k
e
d
I
n
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
T
o
S
h
o
w
 
=
 
$
i
m
g
_
d
e
p
a
r
t
t
o
d
a
y
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
u
n
i
x
A
r
r
i
v
a
l
 
<
 
$
u
n
i
x
T
o
d
a
y
 
&
&
 
$
b
o
o
k
e
d
I
n
 
!
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
T
o
S
h
o
w
 
=
 
$
i
m
g
_
l
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
u
n
i
x
D
e
p
a
r
t
u
r
e
 
>
 
$
u
n
i
x
T
o
d
a
y
 
&
&
 
$
b
o
o
k
e
d
I
n
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
T
o
S
h
o
w
 
=
 
$
i
m
g
_
r
e
s
i
d
e
n
t
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
u
n
i
x
D
e
p
a
r
t
u
r
e
 
<
 
$
u
n
i
x
T
o
d
a
y
 
&
&
 
$
b
o
o
k
e
d
I
n
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
T
o
S
h
o
w
 
=
 
$
i
m
g
_
s
t
i
l
l
h
e
r
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
o
o
k
e
d
O
u
t
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
T
o
S
h
o
w
 
=
 
$
i
m
g
_
b
o
o
k
e
d
o
u
t
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
a
n
c
e
l
l
e
d
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
T
o
S
h
o
w
 
=
 
$
i
m
g
_
c
a
n
c
e
l
l
e
d
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
P
r
o
p
e
r
t
y
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
h
o
w
_
a
l
l
 
=
=
 
1
 
&
&
 
(
(
i
n
t
)
 
$
p
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
 
!
=
 
(
i
n
t
)
 
$
d
e
f
a
u
l
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
P
r
o
p
e
r
t
y
 
=
 
'
&
t
h
i
s
P
r
o
p
e
r
t
y
=
'
.
$
p
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


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
e
d
i
t
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
e
d
i
t
_
b
o
o
k
i
n
g
'
.
'
&
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
=
'
.
$
p
-
>
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
.
$
t
h
i
s
P
r
o
p
e
r
t
y
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
E
D
I
T
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
E
D
I
T
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
$
p
-
>
c
a
n
c
e
l
l
e
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
-
>
b
o
o
k
e
d
_
i
n
 
=
=
 
0
 
&
&
 
i
s
s
e
t
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
C
l
a
s
s
e
s
[
'
0
6
0
0
1
'
]
[
'
c
h
e
c
k
i
n
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
-
>
a
p
p
r
o
v
e
d
 
=
=
 
1
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
b
o
o
k
G
u
e
s
t
I
n
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
c
h
e
c
k
i
n
'
.
'
&
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
=
'
.
$
p
-
>
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
.
$
t
h
i
s
P
r
o
p
e
r
t
y
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
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
B
O
O
K
I
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
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
B
O
O
K
I
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
$
p
-
>
b
o
o
k
e
d
o
u
t
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
b
o
o
k
G
u
e
s
t
O
u
t
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
c
h
e
c
k
o
u
t
'
.
'
&
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
=
'
.
$
p
-
>
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
.
$
t
h
i
s
P
r
o
p
e
r
t
y
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
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
B
O
O
K
O
U
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
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
B
O
O
K
O
U
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
-
>
a
p
p
r
o
v
e
d
 
=
=
 
0
 
&
&
 
i
s
s
e
t
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
C
l
a
s
s
e
s
[
'
0
0
0
0
5
'
]
[
'
b
o
o
k
i
n
g
_
e
n
q
u
i
r
i
e
s
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
p
u
b
l
i
s
h
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
a
p
p
r
o
v
e
_
e
n
q
u
i
r
y
'
.
'
&
c
o
n
t
r
a
c
t
U
i
d
=
'
.
$
p
-
>
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
.
$
t
h
i
s
P
r
o
p
e
r
t
y
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
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
_
A
P
P
R
O
V
E
_
I
N
Q
U
I
R
Y
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
B
O
O
K
I
N
G
_
A
P
P
R
O
V
E
_
I
N
Q
U
I
R
Y
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
u
n
p
u
b
l
i
s
h
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
r
e
j
e
c
t
_
e
n
q
u
i
r
y
'
.
'
&
c
o
n
t
r
a
c
t
U
i
d
=
'
.
$
p
-
>
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
.
$
t
h
i
s
P
r
o
p
e
r
t
y
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
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
_
R
E
J
E
C
T
_
I
N
Q
U
I
R
Y
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
B
O
O
K
I
N
G
_
R
E
J
E
C
T
_
I
N
Q
U
I
R
Y
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
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

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
e
d
i
t
_
b
o
o
k
i
n
g
&
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
=
'
.
$
p
-
>
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
.
$
t
h
i
s
P
r
o
p
e
r
t
y
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
C
O
N
F
I
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
S
E
R
V
A
T
I
O
N
_
D
E
T
A
I
L
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
C
O
M
_
C
O
N
F
I
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
S
E
R
V
A
T
I
O
N
_
D
E
T
A
I
L
S
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
$
p
-
>
c
a
n
c
e
l
l
e
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
-
>
b
o
o
k
e
d
_
i
n
 
=
=
 
0
 
&
&
 
i
s
s
e
t
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
C
l
a
s
s
e
s
[
'
0
6
0
0
1
'
]
[
'
c
h
e
c
k
i
n
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
-
>
a
p
p
r
o
v
e
d
 
=
=
 
1
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
s
i
g
n
-
i
n
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
d
e
f
a
u
l
t
 
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
c
h
e
c
k
i
n
&
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
=
'
.
$
p
-
>
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
.
$
t
h
i
s
P
r
o
p
e
r
t
y
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
_
J
O
M
R
E
S
_
A
C
T
I
O
N
_
C
H
E
C
K
I
N
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
A
C
T
I
O
N
_
C
H
E
C
K
I
N
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
s
i
g
n
-
i
n
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
d
e
f
a
u
l
t
 
d
i
s
a
b
l
e
d
'
,
 
'
'
,
 
'
j
a
v
a
s
c
r
i
p
t
:
v
o
i
d
(
)
;
'
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
A
C
T
I
O
N
_
C
H
E
C
K
I
N
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
A
C
T
I
O
N
_
C
H
E
C
K
I
N
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
$
p
-
>
b
o
o
k
e
d
o
u
t
 
=
=
 
0
 
&
&
 
i
s
s
e
t
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
C
l
a
s
s
e
s
[
'
0
6
0
0
1
'
]
[
'
c
h
e
c
k
i
n
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
s
i
g
n
-
o
u
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
s
u
c
c
e
s
s
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
c
h
e
c
k
o
u
t
&
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
=
'
.
$
p
-
>
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
.
$
t
h
i
s
P
r
o
p
e
r
t
y
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
_
J
O
M
R
E
S
_
A
C
T
I
O
N
_
C
H
E
C
K
O
U
T
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
A
C
T
I
O
N
_
C
H
E
C
K
O
U
T
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
u
n
d
o
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
u
n
d
o
_
c
h
e
c
k
i
n
&
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
=
'
.
$
p
-
>
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
.
$
t
h
i
s
P
r
o
p
e
r
t
y
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
_
J
O
M
R
E
S
_
A
C
T
I
O
N
_
U
N
D
O
_
C
H
E
C
K
I
N
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
A
C
T
I
O
N
_
U
N
D
O
_
C
H
E
C
K
I
N
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
$
p
-
>
b
o
o
k
e
d
o
u
t
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
c
h
e
c
k
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
d
e
f
a
u
l
t
 
d
i
s
a
b
l
e
d
'
,
 
'
'
,
 
'
j
a
v
a
s
c
r
i
p
t
:
v
o
i
d
(
)
;
'
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
S
T
A
T
U
S
_
C
H
E
C
K
E
D
O
U
T
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
S
T
A
T
U
S
_
C
H
E
C
K
E
D
O
U
T
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
u
n
d
o
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
u
n
d
o
_
c
h
e
c
k
o
u
t
&
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
=
'
.
$
p
-
>
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
.
$
t
h
i
s
P
r
o
p
e
r
t
y
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
_
J
O
M
R
E
S
_
A
C
T
I
O
N
_
U
N
D
O
_
C
H
E
C
K
O
U
T
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
A
C
T
I
O
N
_
U
N
D
O
_
C
H
E
C
K
O
U
T
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
d
e
f
a
u
l
t
 
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
e
d
i
t
_
b
o
o
k
i
n
g
&
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
=
'
.
$
p
-
>
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
.
$
t
h
i
s
P
r
o
p
e
r
t
y
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
C
O
N
F
I
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
S
E
R
V
A
T
I
O
N
_
D
E
T
A
I
L
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
C
O
M
_
C
O
N
F
I
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
S
E
R
V
A
T
I
O
N
_
D
E
T
A
I
L
S
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
-
>
b
o
o
k
e
d
o
u
t
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
-
>
a
p
p
r
o
v
e
d
 
=
=
 
0
 
&
&
 
i
s
s
e
t
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
C
l
a
s
s
e
s
[
'
0
0
0
0
5
'
]
[
'
b
o
o
k
i
n
g
_
e
n
q
u
i
r
i
e
s
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
c
h
e
c
k
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
a
p
p
r
o
v
e
_
e
n
q
u
i
r
y
&
c
o
n
t
r
a
c
t
U
i
d
=
'
.
$
p
-
>
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
.
$
t
h
i
s
P
r
o
p
e
r
t
y
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
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
_
A
P
P
R
O
V
E
_
I
N
Q
U
I
R
Y
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
B
O
O
K
I
N
G
_
A
P
P
R
O
V
E
_
I
N
Q
U
I
R
Y
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
i
m
e
s
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
r
e
j
e
c
t
_
e
n
q
u
i
r
y
&
c
o
n
t
r
a
c
t
U
i
d
=
'
.
$
p
-
>
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
.
$
t
h
i
s
P
r
o
p
e
r
t
y
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
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
_
R
E
J
E
C
T
_
I
N
Q
U
I
R
Y
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
B
O
O
K
I
N
G
_
R
E
J
E
C
T
_
I
N
Q
U
I
R
Y
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
a
m
e
n
d
B
o
o
k
i
n
g
&
c
o
n
t
r
a
c
t
U
i
d
=
'
.
$
p
-
>
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
.
$
t
h
i
s
P
r
o
p
e
r
t
y
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
N
F
I
R
M
A
T
I
O
N
_
A
M
E
N
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
N
F
I
R
M
A
T
I
O
N
_
A
M
E
N
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
u
s
d
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
a
d
d
_
s
e
r
v
i
c
e
_
t
o
_
b
i
l
l
&
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
=
'
.
$
p
-
>
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
.
$
t
h
i
s
P
r
o
p
e
r
t
y
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
A
D
D
S
E
R
V
I
C
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
A
D
D
S
E
R
V
I
C
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
-
>
d
e
p
o
s
i
t
_
p
a
i
d
 
=
=
 
0
 
&
&
 
$
p
-
>
b
o
o
k
e
d
o
u
t
 
=
=
 
0
 
&
&
 
$
p
-
>
c
a
n
c
e
l
l
e
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
u
s
d
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
e
d
i
t
_
d
e
p
o
s
i
t
&
c
o
n
t
r
a
c
t
U
i
d
=
'
.
$
p
-
>
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
.
$
t
h
i
s
P
r
o
p
e
r
t
y
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
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
_
P
A
I
D
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
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
_
P
A
I
D
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
-
>
b
o
o
k
e
d
_
i
n
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
-
o
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
c
a
n
c
e
l
_
b
o
o
k
i
n
g
&
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
=
'
.
$
p
-
>
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
.
$
t
h
i
s
P
r
o
p
e
r
t
y
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
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
C
A
N
C
E
L
B
O
O
K
I
N
G
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
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
C
A
N
C
E
L
B
O
O
K
I
N
G
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
C
l
a
s
s
e
s
[
'
0
0
0
0
5
'
]
[
'
j
o
m
r
e
s
_
i
c
a
l
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
c
a
l
e
n
d
a
r
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
i
c
a
l
_
e
x
p
o
r
t
_
c
o
n
t
r
a
c
t
&
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
=
'
.
$
p
-
>
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
.
'
&
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
$
p
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
_
J
O
M
R
E
S
_
I
C
A
L
_
E
V
E
N
T
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
I
C
A
L
_
E
V
E
N
T
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
$
p
-
>
c
a
n
c
e
l
l
e
d
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
t
i
m
e
s
'
,
 
'
b
t
n
 
d
i
s
a
b
l
e
d
'
,
 
'
'
,
 
'
j
a
v
a
s
c
r
i
p
t
:
v
o
i
d
(
)
;
'
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
S
T
A
T
U
S
_
C
A
N
C
E
L
L
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
S
T
A
T
U
S
_
C
A
N
C
E
L
L
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
f
i
l
e
-
t
e
x
t
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
v
i
e
w
_
i
n
v
o
i
c
e
&
i
d
=
'
.
$
p
-
>
i
n
v
o
i
c
e
_
u
i
d
.
$
t
h
i
s
P
r
o
p
e
r
t
y
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
S
H
O
W
I
N
V
O
I
C
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
A
N
A
G
E
R
_
S
H
O
W
I
N
V
O
I
C
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
a
d
d
n
o
t
e
&
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
=
'
.
$
p
-
>
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
.
$
t
h
i
s
P
r
o
p
e
r
t
y
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
_
J
O
M
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
A
D
D
'
,
 
'
_
J
O
M
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
A
D
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
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

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
$
p
-
>
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
;


 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
'
<
s
p
a
n
 
c
l
a
s
s
=
"
'
.
$
i
m
g
T
o
S
h
o
w
.
'
"
>
'
.
$
p
-
>
t
a
g
.
'
<
/
s
p
a
n
>
'
;


 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
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
N
a
m
e
(
$
p
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
o
u
t
p
u
t
D
a
t
e
(
$
p
-
>
a
r
r
i
v
a
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
o
u
t
p
u
t
D
a
t
e
(
$
p
-
>
d
e
p
a
r
t
u
r
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
p
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
p
-
>
s
u
r
n
a
m
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
p
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
p
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
p
-
>
e
m
a
i
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
p
-
>
c
o
n
t
r
a
c
t
_
t
o
t
a
l
,
 
$
p
-
>
c
u
r
r
e
n
c
y
_
c
o
d
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
p
-
>
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
,
 
$
p
-
>
c
u
r
r
e
n
c
y
_
c
o
d
e
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
p
-
>
d
e
p
o
s
i
t
_
p
a
i
d
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
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
S
T
A
T
U
S
_
P
A
I
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
S
T
A
T
U
S
_
P
A
I
D
'
,
 
f
a
l
s
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
r
[
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
S
T
A
T
U
S
_
N
O
T
P
A
I
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
S
T
A
T
U
S
_
N
O
T
P
A
I
D
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
p
-
>
s
p
e
c
i
a
l
_
r
e
q
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
$
p
-
>
i
n
v
o
i
c
e
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
$
p
-
>
t
i
m
e
s
t
a
m
p
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
$
p
-
>
l
a
s
t
_
c
h
a
n
g
e
d
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
p
-
>
a
p
p
r
o
v
e
d
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
'
<
s
p
a
n
 
c
l
a
s
s
=
"
l
a
b
e
l
 
l
a
b
e
l
-
g
r
e
e
n
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
T
A
T
U
S
_
A
P
P
R
O
V
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
S
T
A
T
U
S
_
A
P
P
R
O
V
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
.
'
<
/
s
p
a
n
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
(
i
n
t
)
 
$
p
-
>
a
p
p
r
o
v
e
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
'
<
s
p
a
n
 
c
l
a
s
s
=
"
l
a
b
e
l
 
l
a
b
e
l
-
o
r
a
n
g
e
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
T
A
T
U
S
_
I
N
Q
U
I
R
Y
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
S
T
A
T
U
S
_
I
N
Q
U
I
R
Y
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
s
p
a
n
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
'
<
s
p
a
n
 
c
l
a
s
s
=
"
l
a
b
e
l
 
l
a
b
e
l
-
r
e
d
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
T
A
T
U
S
_
R
E
J
E
C
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
S
T
A
T
U
S
_
R
E
J
E
C
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
.
'
<
/
s
p
a
n
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
	

	
	
	
$
r
[
]
 
=
 
$
p
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
o
u
t
p
u
t
[
'
d
a
t
a
'
]
[
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
*

 
 
 
 
 
 
 
 
 
*
 
R
e
t
u
r
n
 
t
h
e
 
j
s
o
n
 
e
n
c
o
d
e
d
 
d
a
t
a
 
t
o
 
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
 
t
a
b
l
e
 
r
o
w
s

 
 
 
 
 
 
 
 
 
*
/

 
 
 
 
 
 
 
 
e
c
h
o
 
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
o
u
t
p
u
t
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

