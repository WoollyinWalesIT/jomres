
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
0
0
6
1
b
o
t
t
o
m
t
e
m
p
l
a
t
e

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
$
c
o
m
p
o
n
e
n
t
A
r
g
s
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

 
 
 
 
 
 
 
 
i
f
 
(
A
J
A
X
C
A
L
L
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
t
i
p
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
t
o
o
l
t
i
p
s
'
)
;


 
 
 
 
 
 
 
 
$
m
a
n
a
g
e
m
e
n
t
_
v
i
e
w
 
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
R
E
Q
U
E
S
T
,
 
'
t
m
p
l
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
o
u
t
p
u
t
[
 
'
R
A
D
I
O
_
B
U
T
T
O
N
_
J
A
V
A
S
C
R
I
P
T
'
 
]
 
=
 
'

	
	
	
<
!
-
-
 
J
o
o
m
l
a
 
3
 
f
r
o
n
t
e
n
d
 
d
o
e
s
n
\
'
t
 
y
e
t
 
h
a
v
e
 
t
h
i
s
,
 
a
n
d
 
J
o
m
r
e
s
 
n
e
e
d
s
 
i
t
 
f
o
r
 
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
 
c
o
n
f
i
g
 
(
a
m
o
n
g
 
o
t
h
e
r
s
)
.
 
P
u
t
 
i
n
 
f
o
r
 
n
o
w
,
 
w
i
l
l
 
s
e
e
 
i
f
 
w
e
 
n
e
e
d
 
t
o
 
r
e
m
o
v
e
 
i
t
 
w
h
e
n
 
A
l
p
h
a
 
2
 
i
s
 
r
e
l
e
a
s
e
d
 
-
-
>

	
	
	
<
s
c
r
i
p
t
>

	
	
	
	
(
f
u
n
c
t
i
o
n
(
$
)
{

	
	
	
	
	
/
/
 
T
u
r
n
 
r
a
d
i
o
s
 
i
n
t
o
 
b
t
n
-
g
r
o
u
p

	
	
	
	
	
$
(
\
'
.
r
a
d
i
o
.
b
t
n
-
g
r
o
u
p
 
l
a
b
e
l
\
'
)
.
a
d
d
C
l
a
s
s
(
\
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
\
'
)

	
	
	
	
	
$
(
"
.
b
t
n
-
g
r
o
u
p
 
l
a
b
e
l
:
n
o
t
(
.
a
c
t
i
v
e
)
"
)
.
c
l
i
c
k
(
f
u
n
c
t
i
o
n
(
)
{

	
	
	
	
	
	
v
a
r
 
l
a
b
e
l
 
=
 
$
(
t
h
i
s
)
;

	
	
	
	
	
	
v
a
r
 
i
n
p
u
t
 
=
 
$
(
\
'
#
\
'
 
+
 
l
a
b
e
l
.
a
t
t
r
(
\
'
f
o
r
\
'
)
)
;


	
	
	
	
	
	
i
f
 
(
!
i
n
p
u
t
.
p
r
o
p
(
\
'
c
h
e
c
k
e
d
\
'
)
)
{

	
	
	
	
	
	
	
l
a
b
e
l
.
c
l
o
s
e
s
t
(
\
'
.
b
t
n
-
g
r
o
u
p
\
'
)
.
f
i
n
d
(
"
l
a
b
e
l
"
)
.
r
e
m
o
v
e
C
l
a
s
s
(
\
'
a
c
t
i
v
e
 
b
t
n
-
p
r
i
m
a
r
y
\
'
)
;

	
	
	
	
	
	
	
l
a
b
e
l
.
a
d
d
C
l
a
s
s
(
\
'
a
c
t
i
v
e
 
b
t
n
-
p
r
i
m
a
r
y
\
'
)
;

	
	
	
	
	
	
	
i
n
p
u
t
.
p
r
o
p
(
\
'
c
h
e
c
k
e
d
\
'
,
 
t
r
u
e
)
;

	
	
	
	
	
	
}

	
	
	
	
	
}
)
;

	
	
	
	
	
$
(
"
.
b
t
n
-
g
r
o
u
p
 
i
n
p
u
t
[
c
h
e
c
k
e
d
=
c
h
e
c
k
e
d
]
"
)
.
e
a
c
h
(
f
u
n
c
t
i
o
n
(
)
{

	
	
	
	
	
	
$
(
"
l
a
b
e
l
[
f
o
r
=
"
 
+
 
$
(
t
h
i
s
)
.
a
t
t
r
(
\
'
i
d
\
'
)
 
+
 
"
]
"
)
.
a
d
d
C
l
a
s
s
(
\
'
a
c
t
i
v
e
 
b
t
n
-
p
r
i
m
a
r
y
\
'
)
;

	
	
	
	
	
}
)
;

	
	
	
	
}
)
(
j
Q
u
e
r
y
)
;

	
	
	
<
/
s
c
r
i
p
t
>
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
i
f
 
(
$
m
a
n
a
g
e
m
e
n
t
_
v
i
e
w
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
m
a
n
a
g
e
m
e
n
t
_
b
o
t
t
o
m
.
h
t
m
l
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
b
o
t
t
o
m
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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

