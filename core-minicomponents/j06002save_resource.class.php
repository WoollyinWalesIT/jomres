
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
2
s
a
v
e
_
r
e
s
o
u
r
c
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
)
;

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
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
'
)
;

 
 
 
 
 
 
 
 
$
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
 
=
 
n
e
w
 
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
(
)
;


 
 
 
 
 
 
 
 
$
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
;

 
 
 
 
 
 
 
 
$
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
P
O
S
T
,
 
'
r
o
o
m
U
i
d
'
,
 
0
)
;

 
 
 
 
 
 
 
 
$
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
P
O
S
T
,
 
'
r
o
o
m
C
l
a
s
s
e
s
'
,
 
0
)
;

 
 
 
 
 
 
 
 
$
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
P
O
S
T
,
 
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
,
 
0
)
;

 
 
 
 
 
 
 
 
$
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
 
g
e
t
E
s
c
a
p
e
d
(
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
P
O
S
T
,
 
'
r
o
o
m
_
n
a
m
e
'
,
 
'
'
)
)
;

 
 
 
 
 
 
 
 
$
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
 
g
e
t
E
s
c
a
p
e
d
(
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
P
O
S
T
,
 
'
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
'
,
 
'
'
)
)
;

 
 
 
 
 
 
 
 
$
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
 
g
e
t
E
s
c
a
p
e
d
(
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
P
O
S
T
,
 
'
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
'
,
 
'
'
)
)
;

 
 
 
 
 
 
 
 
$
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
 
(
f
l
o
a
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
P
O
S
T
,
 
'
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
'
,
 
0
.
0
)
;

 
 
 
 
 
 
 
 
$
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
P
O
S
T
,
 
'
f
e
a
t
u
r
e
s
_
l
i
s
t
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

	
	
$
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
 
g
e
t
E
s
c
a
p
e
d
(
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
P
O
S
T
,
 
'
r
o
o
m
_
t
a
g
l
i
n
e
'
,
 
'
'
)
)
;


 
 
 
 
 
 
 
 
/
/
h
t
m
l
 
e
d
i
t
o
r
 
f
i
e
l
d
s

 
 
 
 
 
 
 
 
i
f
 
(
$
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
l
l
o
w
H
T
M
L
e
d
i
t
o
r
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
 
$
t
h
i
s
-
>
c
o
n
v
e
r
t
_
g
r
e
a
t
e
r
t
h
a
n
s
(
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
P
O
S
T
,
 
'
r
o
o
m
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
'
,
 
'
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
s
t
r
i
p
_
t
a
g
s
(
$
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
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
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
P
O
S
T
,
 
'
r
o
o
m
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
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
i
f
 
(
$
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

 
 
 
 
 
 
 
 
 
 
 
 
$
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
-
>
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
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
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
-
>
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
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
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
l
i
s
t
_
r
e
s
o
u
r
c
e
s
'
)
,
 
'
'
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
 
c
o
n
v
e
r
t
_
g
r
e
a
t
e
r
t
h
a
n
s
(
$
s
t
r
i
n
g
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
s
t
r
i
n
g
 
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
&
#
3
8
;
g
t
;
'
,
 
'
>
'
,
 
$
s
t
r
i
n
g
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
s
t
r
i
n
g
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

