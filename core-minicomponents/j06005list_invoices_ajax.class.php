
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
l
i
s
t
_
i
n
v
o
i
c
e
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
i
n
v
o
i
c
e
_
t
y
p
e
 
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
i
n
v
o
i
c
e
_
t
y
p
e
'
,
 
'
0
'
)
;

 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
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
i
n
v
o
i
c
e
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
4
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
i
d
 
!
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
 
1
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
i
d
'
,
 
'
a
.
i
d
'
,
 
'
d
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
c
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
c
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
n
a
m
e
'
,
 
'
a
.
r
a
i
s
e
d
_
d
a
t
e
'
,
 
'
a
.
d
u
e
_
d
a
t
e
'
,
 
'
a
.
p
a
i
d
'
,
 
'
b
.
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
'
,
 
'
a
.
i
n
i
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
s
t
a
t
u
s
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
0
,
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
 
'
W
H
E
R
E
 
(
 
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
 
0
 
O
R
 
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
'
 
)
 
A
N
D
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
r
a
i
s
e
d
_
d
a
t
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
 
"
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
b
o
o
k
i
n
g
/
c
o
m
m
i
s
s
i
o
n
/
s
u
b
s
c
r
i
p
t
i
o
n
 
i
n
v
o
i
c
e
s

 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
i
n
v
o
i
c
e
_
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
1
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
.
=
 
'
A
N
D
 
(
 
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
i
d
 
!
=
 
0
 
A
N
D
 
a
.
s
u
b
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
 
0
 
A
N
D
 
a
.
i
s
_
c
o
m
m
i
s
s
i
o
n
 
=
 
0
 
)
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
2
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
5
0
)
 
{
 
/
/
h
i
g
h
e
r
 
t
h
a
n
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
.
=
 
'
A
N
D
 
(
 
a
.
i
s
_
c
o
m
m
i
s
s
i
o
n
 
=
 
1
 
A
N
D
 
a
.
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
i
d
.
'
 
)
 
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
 
.
=
 
'
A
N
D
 
(
 
a
.
s
u
b
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
 
0
 
A
N
D
 
a
.
i
s
_
c
o
m
m
i
s
s
i
o
n
 
=
 
0
 
)
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
3
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
!
=
 
5
0
)
 
{
 
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
 
b
u
t
 
o
t
h
e
r
 
t
h
a
n
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
.
=
 
'
A
N
D
 
(
 
a
.
s
u
b
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
 
1
 
A
N
D
 
a
.
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
i
d
.
'
 
)
 
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
 
.
=
 
'
A
N
D
 
(
 
a
.
s
u
b
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
 
0
 
A
N
D
 
a
.
i
s
_
c
o
m
m
i
s
s
i
o
n
 
=
 
0
 
)
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
c
l
a
u
s
e
 
.
=
 
'
A
N
D
 
a
.
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
i
d
.
'
 
'
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
J
R
U
s
e
r
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
.
=
 
'
A
N
D
 
(
 
a
.
s
u
b
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
 
0
 
A
N
D
 
a
.
i
s
_
c
o
m
m
i
s
s
i
o
n
 
=
 
0
 
)
 
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
 
.
=
 
'
A
N
D
 
(
 
a
.
s
u
b
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
 
0
 
O
R
 
(
 
a
.
s
u
b
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
 
1
 
A
N
D
 
a
.
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
i
d
.
'
 
)
 
)
 
A
N
D
 
(
 
a
.
i
s
_
c
o
m
m
i
s
s
i
o
n
 
=
 
0
 
O
R
 
(
 
a
.
i
s
_
c
o
m
m
i
s
s
i
o
n
 
=
 
1
 
A
N
D
 
a
.
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
i
d
.
'
 
)
 
)
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
s
t
a
t
u
s

 
 
 
 
 
 
 
 
i
f
 
(
$
i
n
v
o
i
c
e
_
s
t
a
t
u
s
 
!
=
 
4
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
 
'
A
N
D
 
a
.
s
t
a
t
u
s
 
=
 
'
.
$
i
n
v
o
i
c
e
_
s
t
a
t
u
s
.
'
 
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
u
s
e
r
s
 
i
n
v
o
i
c
e
s
 
-
 
n
o
t
 
u
s
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
c
l
a
u
s
e
 
.
=
 
'
A
N
D
 
a
.
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
i
d
.
'
 
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
s
p
e
c
i
f
i
c
 
g
u
e
s
t

 
 
 
 
 
 
 
 
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
 
'
A
N
D
 
d
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
 
'
.
$
g
u
e
s
t
_
i
d
.
'
 
'
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
 
"
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
i
d
,
 

	
	
	
	
	
a
.
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
,
 

	
	
	
	
	
a
.
g
u
e
s
t
_
i
d
,
 

	
	
	
	
	
a
.
s
t
a
t
u
s
,
 

	
	
	
	
	
a
.
r
a
i
s
e
d
_
d
a
t
e
,
 

	
	
	
	
	
a
.
d
u
e
_
d
a
t
e
,
 

	
	
	
	
	
a
.
p
a
i
d
,
 

	
	
	
	
	
a
.
i
n
i
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
c
u
r
r
e
n
c
y
c
o
d
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
i
d
,
 

	
	
	
	
	
a
.
s
u
b
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
i
s
_
c
o
m
m
i
s
s
i
o
n
,
 

	
	
	
	
	
G
R
O
U
P
_
C
O
N
C
A
T
(
D
I
S
T
I
N
C
T
 
b
.
n
a
m
e
 
S
E
P
A
R
A
T
O
R
 
'
<
b
r
>
'
)
 
A
S
 
l
i
n
e
_
i
t
e
m
s
,
 

	
	
	
	
	
S
U
M
(
 
C
A
S
E
 
W
H
E
N
 
b
.
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
 
<
 
0
 
T
H
E
N
 
0
 
E
L
S
E
 
b
.
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
 
E
N
D
 
)
 
A
S
 
g
r
a
n
d
_
t
o
t
a
l
,
 

	
	
	
	
	
d
.
t
a
g
,

	
	
	
	
	
d
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

	
	
	
	
	
d
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

	
	
	
	
	
(
 
C
A
S
E
 
W
H
E
N
 
a
.
s
u
b
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
 
1
 
O
R
 
a
.
i
s
_
c
o
m
m
i
s
s
i
o
n
 
=
 
1
 
T
H
E
N
 
e
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
 
E
L
S
E
 
c
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
 
E
N
D
 
)
 
A
S
 
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
 

	
	
	
	
	
(
 
C
A
S
E
 
W
H
E
N
 
a
.
s
u
b
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
 
1
 
O
R
 
a
.
i
s
_
c
o
m
m
i
s
s
i
o
n
 
=
 
1
 
T
H
E
N
 
e
.
s
u
r
n
a
m
e
 
E
L
S
E
 
c
.
s
u
r
n
a
m
e
 
E
N
D
 
)
 
A
S
 
s
u
r
n
a
m
e
 
 

	
	
	
	
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
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 
a
 

	
	
	
	
	
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
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
 
b
 
O
N
 
a
.
i
d
 
=
 
b
.
i
n
v
_
i
d
 

	
	
	
	
	
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
c
o
n
t
r
a
c
t
s
 
d
 
O
N
 
a
.
i
d
 
=
 
d
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
 
c
 
O
N
 
(
(
 
a
.
g
u
e
s
t
_
i
d
 
!
=
 
0
 
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
i
d
 
=
 
c
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
 
)
 

	
	
	
	
	
	
	
	
	
	
	
	
	
O
R
 
(
 
d
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
 
!
=
 
0
 
A
N
D
 
d
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
 
c
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
 
)
)
 
 

	
	
	
	
	
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
_
p
r
o
f
i
l
e
 
e
 
O
N
 
a
.
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
 
e
.
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
 
"

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
G
R
O
U
P
 
B
Y
 
a
.
i
d
 
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
I
n
v
o
i
c
e
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
I
n
v
o
i
c
e
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


 
 
 
 
 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
p
-
>
s
t
a
t
u
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
0
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
b
e
l
_
c
l
a
s
s
 
=
 
'
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
1
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
b
e
l
_
c
l
a
s
s
 
=
 
'
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
2
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
b
e
l
_
c
l
a
s
s
 
=
 
'
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
3
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
b
e
l
_
c
l
a
s
s
 
=
 
'
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
b
e
l
_
c
l
a
s
s
 
=
 
'
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
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
'
.
'
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
c
o
n
t
r
a
c
t
_
i
d
 
!
=
 
0
 
&
&
 
(
i
n
t
)
 
$
p
-
>
s
t
a
t
u
s
 
!
=
 
1
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
m
a
r
k
_
b
o
o
k
i
n
g
_
i
n
v
o
i
c
e
_
p
a
i
d
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
I
N
V
O
I
C
E
_
M
A
R
K
A
S
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
I
N
V
O
I
C
E
_
M
A
R
K
A
S
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
M
Y
U
S
E
R
_
V
I
E
W
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
C
O
M
P
_
M
Y
U
S
E
R
_
V
I
E
W
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
m
u
v
i
e
w
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
M
Y
U
S
E
R
_
V
I
E
W
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
C
O
M
P
_
M
Y
U
S
E
R
_
V
I
E
W
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
r
i
n
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
p
o
p
u
p
=
1
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
.
'
&
t
m
p
l
=
'
.
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
t
m
p
l
c
o
m
p
o
n
e
n
t
'
)
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
P
R
I
N
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
P
R
I
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
 
'
.
$
l
a
b
e
l
_
c
l
a
s
s
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
i
d
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


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
-
>
t
a
g
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
a
g
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
-
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
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
 
!
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
'
-
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
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
 
=
=
 
'
'
 
&
&
 
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
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
'
-
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
'
-
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
s
u
r
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
t
r
a
n
s
l
a
t
e
d
_
l
i
n
e
_
i
t
e
m
s
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
e
_
i
t
e
m
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
<
b
r
>
'
,
 
$
p
-
>
l
i
n
e
_
i
t
e
m
s
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
l
i
n
e
_
i
t
e
m
s
 
a
s
 
$
i
t
e
m
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
i
t
e
m
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
r
a
n
s
l
a
t
e
d
_
l
i
n
e
_
i
t
e
m
s
 
.
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
i
t
e
m
,
 
$
i
t
e
m
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
b
r
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
s
u
b
s
t
r
(
$
t
r
a
n
s
l
a
t
e
d
_
l
i
n
e
_
i
t
e
m
s
,
 
0
,
 
-
4
)
;


	
	
	
i
f
 
(
$
p
-
>
r
a
i
s
e
d
_
d
a
t
e
 
!
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
)

	
	
	
	
$
r
[
]
 
=
 
$
p
-
>
r
a
i
s
e
d
_
d
a
t
e
;

	
	
	
e
l
s
e

	
	
	
	
$
r
[
]
 
=
 
'
'
;

	
	
	

	
	
	
i
f
 
(
$
p
-
>
d
u
e
_
d
a
t
e
 
!
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
)

	
	
	
	
$
r
[
]
 
=
 
$
p
-
>
d
u
e
_
d
a
t
e
;

	
	
	
e
l
s
e

	
	
	
	
$
r
[
]
 
=
 
'
'
;

	
	
	

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
-
>
p
a
i
d
 
!
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
)

	
	
	
	
$
r
[
]
 
=
 
$
p
-
>
p
a
i
d
;

	
	
	
e
l
s
e

	
	
	
	
$
r
[
]
 
=
 
'
'
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
g
r
a
n
d
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
i
n
i
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
c
o
d
e
)
;


 
 
 
 
 
 
 
 
 
 
 
 
/
/
g
a
t
e
w
a
y
s
 
s
t
u
f
f

 
 
 
 
 
 
 
 
 
 
 
 
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
s
t
a
t
u
s
 
=
=
 
3
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
&
&
 
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
i
d
 
>
 
0
 
&
&
 
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
 
|
|
 
/
/
b
o
o
k
i
n
g
 
i
n
v
o
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
i
d
 
=
=
 
0
 
&
&
 
(
$
p
-
>
s
u
b
s
c
r
i
p
t
i
o
n
 
>
 
0
 
|
|
 
$
p
-
>
i
s
_
c
o
m
m
i
s
s
i
o
n
 
>
 
0
)
)
 
/
/
s
u
b
s
c
r
i
p
t
i
o
n
/
c
o
m
m
i
s
s
i
o
n
 
i
n
v
o
i
c
e

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
r
[
]
 
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
N
O
S
E
F
.
'
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
g
a
t
e
w
a
y
s
_
f
o
r
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
n
v
o
i
c
e
_
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
d
.
'
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
P
A
Y
N
O
W
'
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
I
N
V
O
I
C
E
S
_
P
A
Y
N
O
W
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
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
N
O
S
E
F
.
'
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
g
a
t
e
w
a
y
s
_
f
o
r
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
n
v
o
i
c
e
_
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
s
u
c
c
e
s
s
 
b
t
n
-
s
m
"
>
<
i
 
c
l
a
s
s
=
"
f
a
 
f
a
-
c
r
e
d
i
t
-
c
a
r
d
"
>
<
/
i
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
P
A
Y
N
O
W
'
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
I
N
V
O
I
C
E
S
_
P
A
Y
N
O
W
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
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
e
x
i
t
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

